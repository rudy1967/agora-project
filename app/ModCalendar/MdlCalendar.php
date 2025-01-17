<?php
/**
* This file is part of the Agora-Project Software package
*
* @copyleft Agora-Project <https://www.agora-project.net>
* @license GNU General Public License, version 2 (GPL-2.0)
*/


/*
 * MODELE DES AGENDAS
 */
class MdlCalendar extends MdlObject
{
	const moduleName="calendar";
	const objectType="calendar";
	const dbTable="ap_calendar";
	const MdlObjectContent="MdlCalendarEvent";
	const hasAttachedFiles=true;
	protected static $_hasAccessRight=true;
	public static $requiredFields=["title"];
	public static $searchFields=["title","description"];
	public static $forceDeleteRight=false;//Force la suppression d'agenda perso : cf. "deleteRight()"
	//Valeurs mises en cache
	private static $_readableCalendars=null;
	private static $_myCalendars=null;
	private static $_affectationCalendars=null;


	/*******************************************************************************************
	 * SURCHARGE : CONSTRUCTEUR
	 *******************************************************************************************/
	function __construct($objIdOrValues=null)
	{
		parent::__construct($objIdOrValues);
		//Libellé de l'agenda perso
		if($this->type=="user"){
			$this->title=$this->autorLabel();//Pour l'affichage
			$this->userName=Ctrl::getObj("user",$this->_idUser)->name;//Champ utilisé pour le tri des agendas (cf. "sortCalendars()")
			$this->userFirstName=Ctrl::getObj("user",$this->_idUser)->firstName;//Idem
		}
		//Plage horaire de l'agenda
		if(empty($this->timeSlot)){
			$this->timeSlotBegin=8;
			$this->timeSlotEnd=20;
		}else{
			$tmpTimeSlot=explode("-",$this->timeSlot);
			$this->timeSlotBegin=$tmpTimeSlot[0];
			$this->timeSlotEnd=$tmpTimeSlot[1];
		}
	}

	/**************************************************************************************************************
	 * VERIF SI L'USER COURANT PEUT AJOUTER UN AGENDA DE RESSOURCE (ne concerne pas les agenda de type 'user')
	 **************************************************************************************************************/
	public static function addRight()
	{
		return (Ctrl::$curUser->isSpaceAdmin() || (Ctrl::$curUser->isUser() && Ctrl::$curSpace->moduleOptionEnabled(self::moduleName,"adminAddRessourceCalendar")==false));
	}

	/*************************************************************************************************************************************************************************
	 * VERIF SI L'USER COURANT PEUT AJOUTER OU PROPOSER UN ÉVÉNEMENT ("true" pour tous les users && pour les guests si l'option "propositionGuest" de l'agenda est activé)
	 *************************************************************************************************************************************************************************/
	public function addOrProposeEvt()
	{
		return (Ctrl::$curUser->isUser() || !empty($this->propositionGuest));
	}

	/***************************************************************************************************************************************************************
	 * VERIF SI L'EVT SE TROUVE SUR LA PÉRIODE SELECTIONNEE (début de l'evt dans la période || fin de l'evt dans la période || evt avant et après la période)
	 ***************************************************************************************************************************************************************/
	public static function eventInTimeSlot($evtTimeBegin, $evtTimeEnd, $periodTimeBegin, $periodTimeEnd)
	{
		return ( ($periodTimeBegin<=$evtTimeBegin && $evtTimeBegin<=$periodTimeEnd) || ($periodTimeBegin<=$evtTimeEnd && $evtTimeEnd<=$periodTimeEnd) || ($evtTimeBegin<=$periodTimeBegin && $periodTimeEnd<=$evtTimeEnd) );
	}

	/*******************************************************************************************
	 * VERIF SI C'EST L'AGENDA PARTAGE DE L'ESPACE COURANT
	 *******************************************************************************************/
	public function isSpacelCalendar()
	{
		return ($this->type=="ressource" && ($this->_id==1 || $this->title==Ctrl::$curSpace->name));
	}

	/*******************************************************************************************
	 * VERIF SI C'EST L'AGENDA PERSO DE L'USER COURANT
	 *******************************************************************************************/
	public function isPersonalCalendar()
	{
		return ($this->type=="user" && $this->isAutor());
	}

	/**************************************************************************************************************************************
	 * SURCHARGE : DROIT DE SUPPRIMER L'AGENDA POUR L'USER COURANT => DESACTIVÉ PAR DEFAUT POUR LES AGENDAS PERSOS (cf. $forceDeleteRight)
	 **************************************************************************************************************************************/
	public function deleteRight()
	{
		//"MdlUser::delete()" supprime l'agenda perso en passant $forceDeleteRight à "true" : cela garde ainsi le "deleteRight()" à "true" dans "MdlCalendar::delete()" et "parent::delete()"
		return ($this->type=="user" && $this::$forceDeleteRight==false)  ?  false  :  parent::deleteRight();
	}

	/*******************************************************************************************
	 * SURCHARGE : SUPPRESSION D'AGENDA
	 *******************************************************************************************/
	public function delete()
	{
		//Controle le droit d'accès
		if($this->deleteRight())
		{
			//Supprime les evenements affectés uniquement à l'agenda en question
			$eventList=Db::getCol("SELECT DISTINCT _idEvt FROM ap_calendarEventAffectation WHERE _idCal=".$this->_id." AND _idEvt NOT IN (select _idEvt from ap_calendarEventAffectation where _idCal!=".$this->_id.")");
			foreach($eventList as $_idEvt){
				$tmpEvt=Ctrl::getObj("calendarEvent",$_idEvt);
				$tmpEvt->delete();
			}
			//Puis supprime les affectations de l'agenda aux evenements sur plusieurs agendas
			Db::query("DELETE FROM ap_calendarEventAffectation WHERE _idCal=".$this->_id);
			//Supprime enfin l'agenda
			parent::delete();
		}
	}

	/*******************************************************************************************
	 * LISTE D'EVENEMENTS SUR UNE PERIODE DONNÉE (et "confirmed")
	 *******************************************************************************************/
	public function eventList($timeBegin, $timeEnd, $accessRightMin, $categoryFilter=false, $pluginParams=null)
	{
		////	EVÉNEMENTS SUR UN PÉRIODE DONNÉE (début de l'evt dans la période || fin de l'evt dans la période || evt avant et après la période)  +  Evénements périodiques 
		$sqlSelection=null;
		if(!empty($timeBegin) && !empty($timeEnd)){
			$periodBegin=Db::format(date("Y-m-d 00:00",$timeBegin));
			$periodEnd  =Db::format(date("Y-m-d 23:59",$timeEnd));
			$sqlSelection.=" AND ( (dateBegin between ".$periodBegin." and ".$periodEnd.") OR (dateEnd between ".$periodBegin." and ".$periodEnd.") OR (dateBegin <= ".$periodBegin." and ".$periodEnd." <= dateEnd) OR periodType is not null)";
		}
		////	EVÉNEMENTS CONFIRMÉS ET AFFECTÉS À L'AGENDA
		if($categoryFilter==true)	{$sqlSelection.=MdlCalendarCategory::sqlCategoryFilter();}				//Filtre par catégorie 
		if(!empty($pluginParams))	{$sqlSelection.=" AND ".MdlCalendarEvent::sqlPlugins($pluginParams);}	//Sélection d'evt "plugins" (Search/Dashboard/Shortcut)
		$sqlSelection.=" ORDER BY dateBegin ASC, dateEnd DESC ";											//Second tri par "dateEnd DESC" car si 2 evts on le même dateBegin, on place le + long en 1er (cf. display "week")
		$eventList=Db::getObjTab("calendarEvent","SELECT * FROM ap_calendarEvent WHERE _id IN (select _idEvt from ap_calendarEventAffectation where _idCal=".$this->_id." and confirmed=1) ".$sqlSelection);
		////	FILTRE LES EVÉNEMENTS EN FONCTION DU DROIT D'ACCÈS MINIMUM  (0.5=créneau horaire, 1=lecture, 2=écriture)
		foreach($eventList as $key=>$evtTmp){
			if($evtTmp->accessRight()<$accessRightMin)  {unset($eventList[$key]);}
		}
		////	RENVOIE LES EVENEMENTS
		return $eventList;
	}

	/*********************************************************************************************************************************
	 * FILTRE LES EVENTS PASSES EN PARAMETRES, SUR UNE JOURNEE DONNEE
	 * Note : les evts périodiques sont clonés pour chaque occurence de l'evt
	 *********************************************************************************************************************************/
	public static function eventsFilter($eventList, $timeBegin, $timeEnd)
	{
		$eventsFilter=[];
		foreach($eventList as $tmpEvt)
		{
			////	CLONE L'EVT POUR CHAQUE JOUR (cf. evt sur plusieurs jours ou périodique)  &&  TIME DU DEBUT/FIN DE L'EVT
			$tmpEvt=clone $tmpEvt;
			$evtTimeBegin=strtotime($tmpEvt->dateBegin);
			$evtTimeEnd  =strtotime($tmpEvt->dateEnd);
			////	EVT DU JOUR
			if(static::eventInTimeSlot($evtTimeBegin, $evtTimeEnd, $timeBegin, $timeEnd))   {$eventsFilter[]=$tmpEvt;}
			////	EVT PERIODIQUE SUR LE JOUR =>  déjà commencé  &&  (pas de fin de périodicité || fin de périodicité pas encore arrivé)  &&  (pas de date d'exception || "dateBegin" absent des dates d'exception)
			elseif(!empty($tmpEvt->periodType)  &&  $evtTimeBegin<$timeBegin  &&  (empty($tmpEvt->periodDateEnd) || $timeEnd<=strtotime($tmpEvt->periodDateEnd." 23:59:59"))  &&  (empty($tmpEvt->periodDateExceptions) || preg_match("/".date("Y-m-d",$timeBegin)."/",$tmpEvt->periodDateExceptions)==false)){
				//Récupère les valeurs de la périodicité : fonction du "periodType"
				$periodValues=Txt::txt2tab($tmpEvt->periodValues);
				//Vérifie si l'evt périodique est présent sur le jour courant : il oui, on prépare le reformatage de la date
				$formatModified=$formatKept=null;
				if($tmpEvt->periodType=="weekDay" && in_array(date("N",$timeBegin),$periodValues))														{$formatModified="Y-m-d";	$formatKept=" H:i";}	//jour de semaine
				elseif($tmpEvt->periodType=="month" && in_array(date("m",$timeBegin),$periodValues) && date("d",$evtTimeBegin)==date("d",$timeBegin))	{$formatModified="Y-m";		$formatKept="-d H:i";}	//jour du mois
				elseif($tmpEvt->periodType=="year" && date("m-d",$evtTimeBegin)==date("m-d",$timeBegin))												{$formatModified="Y";		$formatKept="-m-d H:i";}//jour de l'année
				//Reformate pour que le début/fin de l'evt corresponde à la date courante  &&  Ajoute enfin l'evt à $eventsFilter (vérif qu'il soit sur le créneau : cf. "actionTimeSlotBusy()")
				if(!empty($formatModified) && !empty($formatKept)){
					$tmpEvt->dateBegin=date($formatModified,$timeBegin).date($formatKept,$evtTimeBegin);
					$tmpEvt->dateEnd  =date($formatModified,$timeEnd).date($formatKept,$evtTimeEnd);
					if(static::eventInTimeSlot(strtotime($tmpEvt->dateBegin),strtotime($tmpEvt->dateEnd),$timeBegin,$timeEnd))  {$eventsFilter[]=$tmpEvt;}
				}
			}
		}
		return $eventsFilter;
	}

	/*******************************************************************************************
	 * AGENDAS ACCESSIBLES EN LECTURE A L'USER COURANT
	 *******************************************************************************************/
	public static function readableCalendars()
	{
		//Agendas de ressource  &&  Agendas personnels (enabled)  &&  Agenda de l'user
		if(self::$_readableCalendars===null){
			$sqlDisplay=self::sqlDisplay();
			$ressourceCals	=Db::getObjTab("calendar","SELECT DISTINCT * FROM ap_calendar WHERE type='ressource' AND ".$sqlDisplay);
			$persoCals		=Db::getObjTab("calendar","SELECT DISTINCT * FROM ap_calendar WHERE type='user' AND (".$sqlDisplay." OR _idUser=".Ctrl::$curUser->_id.") AND _idUser NOT IN (select _id from ap_user where calendarDisabled=1)");
			self::$_readableCalendars=self::sortCalendars(array_merge($ressourceCals,$persoCals));//Agendas triés via "sortCalendars()"
		}
		return self::$_readableCalendars;
	}

	/*******************************************************************************************
	 * AGENDAS ACCESSIBLES EN ECRITURE POUR L'USER COURANT
	 *******************************************************************************************/
	public static function writableCalendars()
	{
		if(self::$_myCalendars===null){
			self::$_myCalendars=[];
			foreach(self::readableCalendars() as $tmpCal){
				if($tmpCal->editContentRight())  {self::$_myCalendars[]=$tmpCal;}
			}
		}
		return self::$_myCalendars;
	}

	/**************************************************************************************************
	 * AGENDAS SUR LESQUELS L'USER COURANT PEUT AFFECTER OU PROPOSER DES ÉVÉNEMENTS
	 **************************************************************************************************/
	public static function affectationCalendars()
	{
		if(self::$_affectationCalendars===null)
		{
			//Agendas accessibles en lecture
			self::$_affectationCalendars=self::readableCalendars();
			//Ajoute les agendas persos inaccessibles en lecture, pour les propositions d'événement (sauf "guest")
			if(Ctrl::$curUser->isUser()){
				$otherPersoCalendars=Db::getObjTab("calendar", "SELECT DISTINCT * FROM ap_calendar WHERE type='user' AND _idUser IN (".Ctrl::$curSpace->getUsers("idsSql").") AND _idUser NOT IN (select _id from ap_user where calendarDisabled=1)");
				foreach($otherPersoCalendars as $tmpCal){
					if(!in_array($tmpCal,self::$_affectationCalendars))  {self::$_affectationCalendars[]=$tmpCal;}//Ajoute l'agenda?
				}
				self::$_affectationCalendars=self::sortCalendars(self::$_affectationCalendars);//Liste des agendas triée
			}
		}
		return self::$_affectationCalendars;
	}

	/*******************************************************************************************
	 * AGENDAS ACTUELLEMENT AFFICHÉS
	 *******************************************************************************************/
	public static function displayedCalendars($readableCalendars)
	{
		$displayedCalendars=[];
		//// Récupère chaque agenda enregistré en préférence
		$prefCalendars=Txt::txt2tab(Ctrl::prefUser("displayedCalendars"));
		if(!empty($prefCalendars)){
			foreach($readableCalendars as $tmpCal){
				if(in_array($tmpCal->_id,$prefCalendars))  {$displayedCalendars[]=$tmpCal;}
			}
		}
		//// Si aucun agenda en pref, on récupère l'agenda partagé de l'espace (en 1er) ou l'agenda perso de l'user courant
		if(empty($displayedCalendars)){
			foreach($readableCalendars as $tmpCal){
				if($tmpCal->isSpacelCalendar() || $tmpCal->isPersonalCalendar())  {$displayedCalendars[]=$tmpCal;  break;}
			}
		}
		//// Supprime les evénements de plus de 5 ans (lancé en début de session)
		if(empty($_SESSION["calendarsCleanEvt"])){
			$time5YearsAgo =time()-(86400*365*5);										//Time 5ans
			foreach($displayedCalendars as $tmpCal){									//Sélectionne les agendas avec "editContentRight()"
				if($tmpCal->editContentRight()){										//Vérif si l'agenda est accessible en écriture
					foreach($tmpCal->eventList(time(),$time5YearsAgo,2) as $tmpEvt){	//Params : $accessRightMin=2
						if($tmpEvt->isOldEvt($time5YearsAgo))  {$tmpEvt->delete();}		//"isOldEvt()" : date de fin passé && sans périodicité ou périodicité terminé
					}
				}
			}
			$_SESSION["calendarsCleanEvt"]=true;
		}
		//// Retourne les agendas affichés
		return $displayedCalendars;
	}

	/********************************************************************************************************************
	 * LISTE D'AGENDAS TRIÉS :  AGENDA DE L'ESPACE COURANT  >  AGENDAS DE RESSOURCE  >  AGENDA PERSO  >  AGENDA D'USERS
	 ********************************************************************************************************************/
	public static function sortCalendars($calendarList)
	{
		foreach($calendarList as $tmpCal){
			if($tmpCal->isSpacelCalendar())			{$tmpCal->sortField="A__".$tmpCal->title;}
			elseif($tmpCal->type=="ressource")		{$tmpCal->sortField="B__".$tmpCal->title;}
			elseif($tmpCal->isPersonalCalendar())	{$tmpCal->sortField="C__".$tmpCal->title;}
			else									{$tmpCal->sortField="D__".$tmpCal->title;}
		}
		//Tri alphabetique sur le "sortField"
		usort($calendarList,function($objA,$objB){
			return strcmp($objA->sortField, $objB->sortField);
		});
		return $calendarList;
	}

	/*******************************************************************************************
	 * SURCHARGE : MENU CONTEXTUEL
	 *******************************************************************************************/
	public function contextMenu($options=null)
	{
		////	Accès en lecture
		if($this->readRight()){
			////	Adresse web de partage
			$actionJsTmp="$('#urlIcal".$this->_typeId."').show().select(); document.execCommand('copy'); $('#urlIcal".$this->_typeId."').hide(); notify('".Txt::trad("copyUrlConfirmed",true)."');";
			$labelTmp=Txt::trad("CALENDAR_icalUrl")."<input id='urlIcal".$this->_typeId."' value=\"".Req::getCurUrl()."/index.php?ctrl=misc&action=DisplayIcal&typeId=".$this->_typeId."&md5Id=".$this->md5Id()."\" style='display:none;'>";
			$options["specificOptions"][]=["actionJs"=>$actionJsTmp,  "iconSrc"=>"link.png",  "label"=>$labelTmp,  "tooltip"=>Txt::trad("CALENDAR_icalUrlCopy")];
			////	Export Ical des evts
			$options["specificOptions"][]=["actionJs"=>"if(confirm('".Txt::trad("confirm",true)."')) redir('?ctrl=calendar&action=exportEvents&typeId=".$this->_typeId."')",  "iconSrc"=>"dataImportExport.png",  "label"=>Txt::trad("CALENDAR_exportIcal")];
		}
		//// Import Ical des evts
		if($this->editContentRight()){
			$options["specificOptions"][]=["actionJs"=>"lightboxOpen('?ctrl=calendar&action=importEvents&typeId=".$this->_typeId."')",  "iconSrc"=>"dataImportExport.png",  "label"=>Txt::trad("CALENDAR_importIcal")];
		}
		//Renvoie le menu surchargé
		return parent::contextMenu($options);
	}
}