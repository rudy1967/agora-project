<?php
/*
 * Classe de traduction
 */
class Trad extends Txt
{
	/*
	 * Carica gli elementi di traduzione
	 */
	public static function loadTradsLang()
	{
		//// Date formattate da PHP
		setlocale(LC_TIME, "it_IT.utf8", "it_IT.UTF-8", "it_IT", "it", "italiano");

		//// TRADUZIONI
		self::$trad=array(
			//// Langue courante / Header http / Editeurs Tinymce / Documention pdf
			"CURLANG"=>"it",
			"DATELANG"=>"it_IT",
			"EDITORLANG"=>"it_IT",
			"DOCFILE"=>"docs/DOCUMENTATION_IT.pdf",

			//// Sub
			"mainMenu"=>"Menu principale",
			"menuOptions"=>"Menu des options disponibles",
			"fillFieldsForm"=>"Compilare i campi del modulo",
			"requiredFields"=>"Campi obbligatori",
			"inaccessibleElem"=>"Elemento inaccessibile",
			"warning"=>"Avviso",
			"elemEditedByAnotherUser"=>"L'elemento è stato modificato da",//"..bob".
			"yes"=>"Si",
			"no"=>"No",
			"none"=>"nessuno",
			"or"=>"o",
			"and"=>"e",
			"goToPage"=>"Vai alla pagina",
			"alphabetFilter"=>"Filtro alfabetico",
			"displayAll"=>"Visualizza tutto",
			"show"=>"Mostra",
			"hide"=>"Nascondi",
			"byDefault"=>"Per impostazione predefinita",
			"changeOrder"=>"Spostare per impostare ordine di visualizzazione dei moduli",
			"mapLocalize"=>"Localizza sulla mappa",
			"mapLocalizationFailureLeaflet"=>"La localizzazione del seguente indirizzo non è riuscita",
			"mapLocalizationFailureLeaflet2"=>"Verificare l'esistenza del seguente indirizzo su www.google.com/maps o www.openstreetmap.org",
			"sendMail"=>"Invia un e-mail",
			"mailInvalid"=>"Questa e-mail non è valida",
			"element"=>"elemento",
			"elements"=>"elementi",
			"folder"=>"cartella",
			"folders"=>"cartelle",
			"close"=>"Chiudi",
			"confirmCloseForm"=>"Sei sicuro di voler chiudere il modulo?",
			"modifRecorded"=>"Le modifiche sono state salvate",
			"confirm"=>"Conferma?",
			"comment"=>"Commento",
			"commentAdd"=>"Aggiungi un commento",
			"optional"=>"(opzionale)",
			"objNew"=>"Oggetto creato di recente",
			"personalAccess"=>"Accesso personale",
			"copyUrl"=>"Copia il link/url nell'elemento",
			"copyUrlTooltip"=>"Questo link/url consente di accedere direttamente all'elemento:<br>può essere integrato in una notizia, in un argomento del forum, in un e-mail, in un blog (accesso esterno), ecc",
			"copyUrlConfirmed"=>"L indirizzo web è stato copiato con successo",
			"cancel"=>"Annulla",

			//// immagini
			"picture"=>"Immagine",
			"pictureProfil"=>"Immagine del profilo",
			"wallpaper"=>"Sfondo",
			"keepImg"=>"Mantieni immagine",
			"changeImg"=>"Cambia immagine",
			"pixels"=>"pixels",

			//// Connessione
			"specifyLoginPassword"=>"Grazie per aver scelto un login e una password",
			"specifyLogin"=>"Grazie per aver scelto un e-mail/login (senza spazi)",
			"mailLloginNotif"=>"Si consiglia di utilizzare un e-mail come ID di accesso",
			"mailLlogin"=>"Email / Login",
			"connect"=>"Accedi",
			"connectAuto"=>"Ricordati di me",
			"connectAutoTooltip"=>"Salva il mio login e la mia password per connettermi automaticamente",
			"gIdentityUserUnknown"=>"non è registrato nello spazio",
			"connectSpaceSwitch"=>"Connettiti a un altro spazio",
			"connectSpaceSwitchConfirm"=>"Sei sicuro di voler lasciare questo spazio per collegarti a un altro spazio?",
			"guestAccess"=>"Accedi come ospite",
			"guestAccessTooltip"=>"Accedi a questo spazio come ospite",
			"publicSpacePasswordError"=>"Password errata",
			"disconnectSpace"=>"Esci",
			"disconnectSpaceConfirm"=>"Confermare l'uscita dallo spazio?",

			//// Password : connessione dell'utente / edizione dell'utente / reset della password
			"password"=>"Password",
			"passwordModify"=>"Modifica password",
			"passwordToModify"=>"Password temporanea (da modificare all'accesso)",//Mail d invio d invito
			"passwordToModify2"=>"Password (da modificare se necessario)",//Mail di creazione del computer
			"passwordVerif"=>"Conferma password",
			"passwordTooltip"=>"Lasciare vuoto se si desidera mantenere la password",
			"passwordInvalid"=>"La password deve contenere numeri, lettere e almeno 6 caratteri",
			"passwordConfirmError"=>"La password di conferma non è valida",
			"specifyPassword"=>"Grazie per aver specificato una password",
			"resetPassword"=>"Informazioni di accesso dimenticate?",
			"resetPassword2"=>"Inserisci il tuo indirizzo e-mail per ricevere login e password",
			"resetPasswordNotif"=>"È stata appena inviata un e-mail al vostro indirizzo per reimpostare la password. Se non avete ricevuto l'e-mail, verificate che l'indirizzo specificato sia corretto o che l'e-mail non sia presente nello spam",
			"resetPasswordMailTitle"=>"Reimposta la password",
			"resetPasswordMailPassword"=>"Per accedere al proprio spazio e reimpostare la password",
			"resetPasswordMailPassword2"=>"Fare clic qui",
			"resetPasswordMailLoginRemind"=>"Promemoria per il login",
			"resetPasswordIdExpired"=>"Il link per reimpostare la password è scaduto. Si prega di riavviare la procedura",
			
			//// Tipo di immagine
			"displayMode"=>"Vista",
			"displayMode_line"=>"Elenco",
			"displayMode_block"=>"Blocco",
			
			//// Sélectionner / Déselectionner tous les éléments
			"select"=>"Seleziona",
			"selectUnselect"=>"Seleziona / Deseleziona",
			"selectAll"=>"Seleziona tutto",
			"selectNone"=>"Deseleziona tutto",
			"selectSwitch"=>"Cambia selezione",
			"deleteElems"=>"Rimuove gli elementi selezionati",
			"changeFolder"=>"Sposta in un altra cartella",
			"showOnMap"=>"Mostra su una mappa",
			"showOnMapTooltip"=>"Visualizza su una mappa i contatti con indirizzo, codice postale e città",
			"notifSelectUser"=>"Grazie per aver selezionato un utente",
			"notifSelectUsers"=>"Grazie per aver selezionato almeno 2 utenti",
			"selectSpace"=>"Grazie per aver selezionato almeno uno spazio",
			"visibleAllSpaces"=>"Visibile in tutti gli spazi",/*cf. Categorie, temi, ecc*/
			"visibleOnSpace"=>"Visibile nello spazio",/*"..Mio spazio "*/
			
			//// Temps ("de 11h à 12h", "le 25-01-2007 à 10h30", ecc.)
			"from"=>"di ",
			"at"=>"al",
			"the"=>"il",
			"begin"=>"Inizio",
			"end"=>"End",
			"beginEnd"=>"Inizio/Fine",
			"days"=>"giorni",
			"day_1"=>"lunedì",
			"day_2"=>"martedì",
			"day_3"=>"mercoledì",
			"day_4"=>"giovedì",
			"day_5"=>"venerdì",
			"day_6"=>"sabato",
			"day_7"=>"domenica",
			"month_1"=>"Gennaio",
			"month_2"=>"febbraio",
			"month_3"=>"marzo",
			"month_4"=>"aprile",
			"month_5"=>"maggio",
			"month_6"=>"giugno",
			"month_7"=>"luglio",
			"month_8"=>"agosto",
			"month_9"=>"Settembre",
			"month_10"=>"Ottobre",
			"month_11"=>"Novembre",
			"month_12"=>"Dicembre",
			"today"=>"Oggi",
			"beginEndError"=>"La data di fine non può essere precedente alla data di inizio",
			"dateFormatError"=>"La data deve essere nel formato gg/mm/aaaa",
			
			//// Menus d édition des objets et editeur tinyMce
			"title"=>"Titolo",
			"name"=>"Nome",
			"description"=>"Descrizione",
			"specifyName"=>"Grazie per aver specificato un nome",
			"editorDraft"=>"Recupera il mio testo",
			"editorDraftConfirm"=>"Recupera l'ultimo testo specificato",
			"editorFileInsert"=>"Aggiungi immagine o video",
			"editorFileInsertNotif"=>"Selezionare un immagine in formato Jpeg, Png, Gif o Svg",
			
			//// Convalida delle formule
			"add"=>"Aggiungi",
			"modify"=>"Modifica",
			"record"=>"Salva",
			"modifyAndAccesRight"=>"Modifica e definizione dell'accesso",
			"validate"=>"Convalida",
			"send"=>"Invia",
			"sendTo"=>"Invia a",
			
			//// Tri d affichage. Tutti gli elementi (dossier, tache, link, ecc.) hanno una data, un autore e una descrizione.
			"sortBy"=>"Ordinato per",
			"sortBy2"=>"Ordina per",
			"SORT_dateCrea"=>"data di creazione",
			"SORT_dateModif"=>"data di modifica",
			"SORT_title"=>"titolo",
			"SORT_description"=>"descrizione",
			"SORT__idUser"=>"autore",
			"SORT_extension"=>"tipo di file",
			"SORT_octetSize"=>"dimensione",
			"SORT_downloadsNb"=>"download",
			"SORT_civility"=>"titolo",
			"SORT_name"=>"cognome",
			"SORT_firstName"=>"nome",
			"SORT_adress"=>"indirizzo",
			"SORT_postalCode"=>"codice postale",
			"SORT_city"=>"città",
			"SORT_country"=>"paese",
			"SORT_function"=>"funzione",
			"SORT_companyOrganization"=>"azienda/organizzazione",
			"SORT_lastConnection"=>"ultimo accesso",
			"tri_ascendant"=>"Ascendente",
			"tri_descendant"=>"Discendente",
			
			//// Opzioni di soppressione
			"confirmDelete"=>"Vuoi eliminare definitivamente questi elementi?",
			"confirmDeleteDbl"=>"Questa azione è definitiva: confermate tutti gli stessi elementi?",
			"confirmDeleteSelect"=>"Si desidera eliminare definitivamente la selezione?",
			"confirmDeleteSelectNb"=>"elementi selezionati",//"55 elementi selezionati".
			"confirmDeleteFolderAccess"=>"Attenzione! Alcune sottocartelle non sono accessibili: saranno eliminate!",
			"notifyBigFolderDelete"=>"L'eliminazione di --NB_FOLDERS-- sottocartelle può essere un po  grande, attendere qualche istante prima della fine del processo",
			"delete"=>"Elimina",
			"notDeletedElements"=>"Alcuni elementi non sono stati eliminati perché non si dispone dei diritti di accesso necessari",
			
			//// Visibilité d un Objet: auteur et droits d accès
			"autor"=>"Autore",
			"postBy"=>"Postato da",
			"guest"=>"Ospite",
			"creation"=>"Creazione",
			"modification"=>"Modifica",
			"createBy"=>"Creato da",
			"modifBy"=>"Modificato da",
			"objHistory"=>"Storia dell'elemento",
			"all"=>"tutti",
			"all2"=>"tutti",
			"deletedUser"=>"account utente eliminato",
			"folderContent"=>"contenuto",
			"accessRead"=>"Leggi",
			"accessReadTooltip"=>"Accesso in lettura",
			"accessWriteLimit"=>"scrittura limitata",
			"accessWriteLimitTooltip"=>"Accesso in scrittura limitato: possibilità di aggiungere -OBJCONTENT- nella -OBJLABEL--,<br>ma ogni utente può modificare/cancellare solo l'-OBJCONTENT- che ha creato.",
			"accessWrite"=>"scrivi",
			"accessWriteTooltip"=>"Accesso in scrittura",
			"accessWriteTooltipContainer"=>"Accesso per iscritto: possibilità di aggiungere, modificare o eliminare tutti gli -OBJCONTENT-- della --OBJLABEL--",
			"accessAutorPrivilege"=>"Solo l'autore e gli amministratori possono modificare i diritti di accesso o eliminare il --OBJLABEL--",
			"accessRightsInherited"=>"Diritti di accesso ereditati da --OBJLABEL--",
			"categoryNotifSpaceAccess"=>"è accessibile solo nello sprazio",//Ex: "Thème bidule -n est accessible que sur l'espace- Machin"
			"categoryNotifChangeOrder"=>"L'ordine di visualizzazione è stato modificato",

			//// Libellé des objets
			"OBJECTcontainer"=>"contenitore",
			"OBJECTelement"=>"elemento",
			"OBJECTfolder"=>"cartella",
			"OBJECTdashboardNews"=>"news",
			"OBJECTdashboardPoll"=>"sondaggio",
			"OBJECTfile"=>"file",
			"OBJECTfileFolder"=>"cartella",
			"OBJECTcalendar"=>"calendario",
			"OBJECTcalendarEvent"=>"evento",
			"OBJECTforumSubject"=>"argomento",
			"OBJECTforumMessage"=>"messaggio",
			"OBJECTcontact"=>"contatto",
			"OBJECTcontactFolder"=>"cartella",
			"OBJECTlink"=>"segnalibro",
			"OBJECTlinkFolder"=>"cartella",
			"OBJECTtask"=>"attività",
			"OBJECTtaskFolder"=>"cartella",
			"OBJECTuser"=>"utente",
			
			//// Invio di un e-mail (nuovo utente, notifica di creazione di un oggetto, ecc...)
			"MAIL_hello"=>"Ciao",
			"MAIL_hideRecipients"=>"Nascondi destinatari",
			"MAIL_hideRecipientsTooltip"=>"Metti tutti i destinatari in copia nascosta. Si noti che con questa opzione l'e-mail potrebbe arrivare nello spam in alcune caselle di posta elettronica",
			"MAIL_addReplyTo"=>"Metti il mio messaggio di posta elettronica in risposta",
			"MAIL_addReplyToTooltip"=>"Aggiungi il mio messaggio di posta elettronica nel campo   Rispondi a  . Si noti che con questa opzione l'e-mail potrebbe finire nello spam in alcune caselle di posta elettronica",
			"MAIL_noFooter"=>"Non firmare il messaggio",
			"MAIL_noFooterTooltip"=>"Non firmare la fine del messaggio con il nome del mittente e un collegamento web allo spazio",
			"MAIL_receptionNotif"=>"Ricevuta di consegna",
			"MAIL_receptionNotifTooltip"=>"Attenzione! Alcuni client di posta elettronica non supportano le ricevute di consegna",
			"MAIL_specificMails"=>"Aggiungi indirizzi e-mail",
			"MAIL_specificMailsTooltip"=>"Aggiungi indirizzi e-mail elencati nello spazio",
			"MAIL_fileMaxSize"=>"Tutti gli allegati non devono superare i 15 MB; alcuni servizi di messaggistica potrebbero rifiutare i messaggi di posta elettronica oltre questo limite. Inviare comunque?",
			"MAIL_sendButton"=>"Invia e-mail",
			"MAIL_sendBy"=>"Inviato da",//"Inviato da" Mr trucmuche
			"MAIL_sendOk"=>"L'e-mail è stata inviata!",
			"MAIL_sendNotif"=>"L'e-mail di notifica è stata inviata!",
			"MAIL_notSend"=>"Non è stato possibile inviare l'e-mail",
			"MAIL_notSendEverybody"=>"L'e-mail non è stata inviata a tutti i destinatari: se possibile, verificare la validità delle e-mail",
			"MAIL_fromTheSpace"=>"dallo spazio",//"depuis l'espace Bidule"
			"MAIL_elemCreatedBy"=>"--OBJLABEL-- creato da",//boby
			"MAIL_elemModifiedBy"=>"--OBJLABEL-- modificato da",//boby
			"MAIL_elemAccessLink"=>"Fare clic qui per accedere all'elemento nel proprio spazio",

			//// Dossier e file
			"gigaOctet"=>"Gb",
			"megaOctet"=>"Mb",
			"kiloOctet"=>"Kb",
			"rootFolder"=>"Cartella principale",
			"rootFolderTooltip"=>"Aprire le impostazioni dello spazio per modificare i diritti di accesso alla cartella principale",
			"addFolder"=>"Aggiungi una cartella",
			"download"=>"Scarica un file",
			"downloadFolder"=>"Scarica cartella",
			"diskSpaceUsed"=>"Spazio su disco utilizzato",
			"diskSpaceUsedModFile"=>"Spazio su disco utilizzato per il File manager",
			"downloadAlert"=>"L'archivio è troppo grande per essere scaricato durante il giorno (--ARCHIVE_SIZE--). Riavviare il download dopo",//"19h".
			
			//// Informazioni su una persona
			"civility"=>"Titolo",
			"name"=>"Cognome",
			"firstName"=>"Nome",
			"adress"=>"Indirizzo",
			"postalCode"=>"Codice postale",
			"city"=>"Città",
			"country"=>"paese",
			"telephone"=>"Telefono",
			"telmobile"=>"Telefono cellulare",
			"mail"=>"Email",
			"function"=>"Funzione",
			"companyOrganization"=>"Azienda/Organizzazione",
			"lastConnection"=>"Ultimo accesso",
			"lastConnection2"=>"Accesso effettuato",
			"lastConnectionEmpty"=>"Non ancora connesso",
			"displayProfil"=>"Visualizza profilo",
			
			//// Captcha
			"captcha"=>"Copia i 5 caratteri",
			"captchaTooltip"=>"Grazie per aver inserito i 5 caratteri per l'identificazione",
			"captchaError"=>"L identificazione visiva è falsa",
			
			//// Rechercher
			"searchSpecifyText"=>"Specificare almeno 3 caratteri (alfanumerici e non speciali)",
			"search"=>"Ricerca",
			"searchDateCrea"=>"Data di creazione",
			"searchDateCreaDay"=>"meno di un giorno",
			"searchDateCreaWeek"=>"meno di una settimana",
			"searchDateCreaMonth"=>"meno di un mese",
			"searchDateCreaYear"=>"meno di un anno",
			"searchOnSpace"=>"Cerca in questo spazio",
			"advancedSearch"=>"Ricerca avanzata",
			"advancedSearchAnyWord"=>"qualsiasi parola",
			"advancedSearchAllWords"=>"tutte le parole",
			"advancedSearchExactPhrase"=>"frase esatta",
			"keywords"=>"Parole chiave",
			"listModules"=>"Moduli",
			"listFields"=>"Campi",
			"listFieldsElems"=>"Elementi coinvolti",
			"noResults"=>"Nessun risultato",
			
			//// Inscription d utilisateur
			"userInscription"=>"Registrati su questo spazio",
			"userInscriptionTooltip"=>"Crea un nuovo account utente (convalidato da un amministratore)",
			"userInscriptionSpace"=>"Registrati nello spazio",
			"userInscriptionRecorded"=>"La registrazione è stata salvata: sarà convalidata al più presto dall'amministratore dello spazio",
			"userInscriptionEmailSubject"=>"Nuova registrazione nello spazio",//"Mon espace"
			"userInscriptionEmailMessage"=>"È stata richiesta una nuova registrazione da parte di <i>--NEW_USER_LABEL--</i> per lo spazio <i>--SPACE_NAME--</i> : <br><br><i>--NEW_USER_MESSAGE--<i> <br><br>Ricordatevi di convalidare o invalidare questa registrazione durante la vostra prossima connessione.",
			"userInscriptionEdit"=>"Consenti ai visitatori di registrarsi nello spazio",
			"userInscriptionEditTooltip"=>"La registrazione avviene nella homepage del sito. La registrazione deve poi essere convalidata dall'amministratore dello spazio",
			"userInscriptionNotif"=>"Notifica via e-mail a ogni registrazione",
			"userInscriptionNotifTooltip"=>"Invia una notifica via e-mail agli amministratori dello spazio, dopo ogni registrazione",
			"userInscriptionPulsate"=>"Registrazione",
			"userInscriptionValidate"=>"Convalida registrazione utente",
			"userInscriptionValidateTooltip"=>"Convalida la registrazione dell'utente sul sito",
			"userInscriptionSelectValidate"=>"Convalida registrazioni",
			"userInscriptionSelectInvalidate"=>"Invalida registrazioni",
			"userInscriptionInvalidateMail"=>"L account non è stato convalidato su",

			//// Importer ou Exporter : Contact OU Utilisateurs
			"importExport_user"=>"Importazione/esportazione di utenti",
			"import_user"=>"Importazione di utenti nello spazio corrente",
			"export_user"=>"Esporta gli utenti dello spazio corrente",
			"importExport_contact"=>"Importazione/esportazione di contatti",
			"import_contact"=>"Importa i contatti nella cartella corrente",
			"export_contact"=>"Esporta contatti dalla cartella corrente",
			"exportFormat"=>"Formato",
			"specifyFile"=>"Seleziona un file un file",
			"fileExtension"=>"Il tipo di file non è valido. Deve essere del tipo",
			"importContactRootFolder"=>"I contatti verranno assegnati per impostazione predefinita a &quot;tutti gli utenti dello spazio&quot;",//"Mon espace"
			"importInfo"=>"Selezionare i campi di Agorà a cui puntare, grazie al menu a tendina di ciascuna colonna",
			"importNotif1"=>"Scegli la colonna del nome nelle caselle di selezione",
			"importNotif2"=>"Scegli un contatto da importare",
			"importNotif3"=>"Il campo di questa agorà è già stato selezionato in un altra colonna (i campi di ogni agorà possono essere selezionati una sola volta)",

			//// Messaggi di errore / Notifiche
			"NOTIF_identification"=>"Login o password non validi",
			"NOTIF_presentIp"=>"Questo account utente viene attualmente utilizzato da un altro computer, con un altro indirizzo IP",
			"NOTIF_noAccessNoSpaceAffected"=>"L'account utente è stato identificato correttamente, ma non è attualmente assegnato ad alcuno spazio. Contattare l'amministratore",
			"NOTIF_noAccess"=>"L utente è stato disconnesso",
			"NOTIF_fileOrFolderAccess"=>"File o cartella non accessibile",
			"NOTIF_diskSpace"=>"Lo spazio per la memorizzazione dei file è insufficiente, non è possibile aggiungere file",
			"NOTIF_fileVersionForbidden"=>"Tipo di file non consentito",
			"NOTIF_fileVersion"=>"Tipo di file diverso dall'originale",
			"NOTIF_folderMove"=>"Non è possibile spostare la cartella all'interno...!",
			"NOTIF_duplicateName"=>"Esiste già un elemento con lo stesso nome",
			"NOTIF_fileName"=>"Esiste già un file con lo stesso nome (ma non è stato sostituito con il file corrente)",
			"NOTIF_chmodDATAS"=>"La cartella   DATAS   non è accessibile in scrittura. È necessario concedere un accesso in lettura-scrittura al proprietario e al gruppo (  chmod 775  )",
			"NOTIF_usersNb"=>"Non è possibile aggiungere un nuovo utente: limitato a ", // "...limité à" 10
			
			//// Intestazione / Piè di pagina
			"HEADER_displaySpace"=>"spazi di lavoro",
			"HEADER_displayAdmin"=>"Visualizzazione amministratore",
			"HEADER_displayAdminEnabled"=>"Visualizzazione amministratore abilitata",
			"HEADER_displayAdminInfo"=>"Questa opzione consente di visualizzare anche gli elementi dello spazio non assegnati all'utente",
			"HEADER_searchElem"=>"Ricerca nello spazio",
			"HEADER_documentation"=>"Documentazione",
			"HEADER_shortcuts"=>"Scorciatoie",
			"FOOTER_pageGenerated"=>"Pagina generata in",

			//// Messenger / Visio
			"MESSENGER_headerModuleName"=>"Messaggi",
			"MESSENGER_moduleDescription"=>"Messaggistica istantanea: chattare in diretta o avviare una videoconferenza con persone collegate allo spazio",
			"MESSENGER_messengerTitle"=>"Messaggistica istantanea: fare clic sul nome di una persona per chattare o avviare una videoconferenza",
			"MESSENGER_messengerMultiUsers"=>"Chatta con altri selezionando i miei interlocutori nel riquadro di destra",
			"MESSENGER_connected"=>"Online",
			"MESSENGER_nobody"=>"Al momento sei l'unica persona connessa allo spazio",
			"MESSENGER_messageFrom"=>"Messaggio da",
			"MESSENGER_messageTo"=>"Inviato a",
			"MESSENGER_chatWith"=>"Chatta con",
			"MESSENGER_addMessageToSelection"=>"Il mio messaggio (persone selezionate)",
			"MESSENGER_addMessageTo"=>"Il mio messaggio a",
			"MESSENGER_addMessageNotif"=>"Grazie per aver specificato un messaggio",
			"MESSENGER_visioProposeTo"=>"Proponi una videochiamata a",//..boby
			"MESSENGER_visioProposeToSelection"=>"Proponi una videochiamata alle persone selezionate",
			"MESSENGER_visioProposeToUsers"=>"Fare clic qui per avviare la videochiamata con",//"..Will & Boby".
			
			//// Lancer une Visio
			"VISIO_urlAdd"=>"Aggiungi una videoconferenza",
			"VISIO_urlCopy"=>"Copia il collegamento alla videoconferenza",
			"VISIO_urlDelete"=>"Rimuovi il collegamento alla videoconferenza",
			"VISIO_launch"=>"Avvia la videoconferenza",
			"VISIO_launchFromEvent"=>"Avvia la videoconferenza di questo evento",
			"VISIO_urlMail"=>"Aggiungi un link alla fine del testo per avviare una nuova videoconferenza",
			"VISIO_launchTooltip"=>"Ricordarsi di consentire l'accesso alla webcam e al microfono",
			"VISIO_launchTooltip2"=>"Fare clic qui se si riscontrano problemi nell'avvio della videoconferenza",
			"VISIO_installJitsi"=>"Installare l'applicazione gratuita Jitsi per avviare le videoconferenze",
			"VISIO_launchServerTooltip"=>"Scegliere il server secondario se il server primario non funziona correttamente.<br>I contatti dovranno selezionare lo stesso server video",
			"VISIO_launchServerMain"=>"Server principale",
			"VISIO_launchServerAlt"=>"Server secondario",
			"VISIO_launchButton"=>"Avvia la videoconferenza",

			//// VueObjEditMenuSubmit.php
			"EDIT_notifNoSelection"=>"È necessario selezionare almeno una persona o uno spazio",
			"EDIT_notifNoPersoAccess"=>"Non sei assegnato all'elemento. convalidare tutti gli stessi ?",
			"EDIT_parentFolderAccessError"=>"Verificare i diritti di accesso della cartella padre <br><i>--FOLDER_NAME--</i><br><br>Deve essere presente anche un diritto di accesso per <br><i>--SPACE_LABEL--</i> &nbsp;>&nbsp; <i>--TARGET_LABEL--</i><br><br>In caso contrario questo file non sarà accessibile!",
			"EDIT_accessRight"=>"Diritti di accesso",
			"EDIT_accessRightContent"=>"Diritti di accesso al contenuto",
			"EDIT_spaceNoModule"=>"Il modulo corrente non è ancora stato aggiunto a questo spazio",
			"EDIT_allUsers"=>"Tutti gli utenti",
			"EDIT_allUsersAndGuests"=>"Tutti gli utenti e gli ospiti",
			"EDIT_allUsersTooltip"=>"Tutti gli utenti dello spazio <i>--SPACENAME--</i>",
			"EDIT_allUsersAndGuestsTooltip"=>"Tutti gli utenti dello spazio <i>--SPACENAME--</i> e gli ospiti, ma con accesso in sola lettura (ospiti: persone che non hanno un account utente)",
			"EDIT_adminSpace"=>"Amministratore di questo spazio:<br>accesso in scrittura a tutti gli elementi di questo spazio",
			"EDIT_showAllUsers"=>"Visualizza tutti gli utenti",
			"EDIT_showAllUsersAndSpaces"=>"Visualizza tutti gli utenti e gli spazi",
			"EDIT_notifMail"=>"Notifica",
			"EDIT_notifMail2"=>"Invia una notifica di creazione/modifica via e-mail",
			"EDIT_notifMailTooltip"=>"La notifica verrà inviata alle persone assegnate all'elemento (--OBJLABEL--)",
			"EDIT_notifMailTooltipCal"=>"<hr>Se si assegna l'evento ai calendari personali, la notifica verrà inviata solo ai proprietari di questi calendari (accesso in scrittura).",
			"EDIT_notifMailAddFiles"=>"Allega file alla notifica",
			"EDIT_notifMailSelect"=>"Seleziona i destinatari delle notifiche",
			"EDIT_accessRightSubFolders"=>"Assegna gli stessi diritti di accesso alle sottocartelle",
			"EDIT_accessRightSubFoldersTooltip"=>"Estendi i diritti di accesso alle sottocartelle che puoi modificare",
			"EDIT_shortcut"=>"Scorciatoia",
			"EDIT_shortcutInfo"=>"Aggiungi un collegamento al menu principale",
			"EDIT_attachedFile"=>"File allegati",
			"EDIT_attachedFileAdd"=>"Aggiungi file allegati",
			"EDIT_attachedFileInsert"=>"Inserisci nel testo",
			"EDIT_attachedFileInsertTooltip"=>"Inserisci immagine/video nel testo dell'editor (formato jpg, png o mp4)",
			"EDIT_guestName"=>"Il tuo nome/nickname",
			"EDIT_guestNameNotif"=>"Specifica un nome/nickname",
			"EDIT_guestMail"=>"Il tuo indirizzo e-mail",
			"EDIT_guestMailTooltip"=>"Specificare l'e-mail per la convalida della proposta",
			"EDIT_guestElementRegistered"=>"Grazie per la proposta. Verrà esaminata al più presto prima della convalida",
			
			//// Formula di installazione
			"INSTALL_dbConnect"=>"Connessione al database",
			"INSTALL_dbHost"=>"Nome host del server di database",
			"INSTALL_dbName"=>"Nome del database",
			"INSTALL_dbLogin"=>"Nome utente",
			"INSTALL_adminAgora"=>"Informazioni sull amministratore del database",
			"INSTALL_errorDbNameFormat"=>"Attenzione: il nome del database deve contenere preferibilmente solo caratteri alfanumerici e trattini o underscore",
			"INSTALL_errorDbConnection"=>"L identificazione al database MariaDB/MySQL non è riuscita",
			"INSTALL_errorDbExist"=>"Applicazione già installata: <a href= index.php >cliccare qui per accedervi</a><br><br>Per riavviare l'installazione, ricordarsi di cancellare il database",
			"INSTALL_errorDbNoSqlFile"=>"Il file di installazione db.sql non è accessibile o è stato eliminato perché l'installazione è già stata eseguita",
			"INSTALL_PhpOldVersion"=>"Agora-Project --CURRENT_VERSION-- richiede una versione più recente di PHP",
			"INSTALL_confirmInstall"=>"Confermare l'installazione?",
			"INSTALL_installOk"=>"Agora-Project è stato installato correttamente!",
			// I primi dati registrati nel DB
			"INSTALL_agoraDescription"=>"Spazio per la condivisione e il lavoro collaborativo",
			"INSTALL_dataDashboardNews"=>"<h3>Benvenuto nel tuo nuovo spazio di condivisione!</h3>
											<h4><img src='app/img/file/iconSmall.png'> Condividi ora i tuoi file nel file manager</h4>
											<h4><img src='app/img/calendar/iconSmall.png'> Condividi i calendari comuni o il tuo calendario personale</h4>
											<h4><img src='app/img/dashboard/iconSmall.png'> Espandi il feed di notizie della tua comunità</h4>
											<h4><img src='app/img/messenger.png'> Comunicare attraverso il forum, la messaggistica istantanea o le videoconferenze</h4>
											<h4><img src='app/img/task/iconSmall.png'> Centralizza le tue note, i tuoi progetti e i tuoi contatti</h4>
											<h4><img src='app/img/mail/iconSmall.png'> Invia le newsletter via e-mail</h4>
											<h4><img src='app/img/postMessage.png'> <a onclick=\"lightboxOpen('?ctrl=user&action=SendInvitation')\">Clicca qui per inviare le email di invito e far crescere la tua community!</a></h4>
											<h4><img src='app/img/pdf.png'> <a href='https://www.omnispace.fr/index.php?ctrl=offline&action=Documentation' target='_blank'>Per maggiori informazioni, consulta la documentazione ufficiale di Omnispace & Agora-Project</a></h4>",
			"INSTALL_dataDashboardPoll"=>"Cosa ne pensi del news feed?",
			"INSTALL_dataDashboardPollA"=>"Molto interessante!",
			"INSTALL_dataDashboardPollB"=>"Interessante",
			"INSTALL_dataDashboardPollC"=>"Non interessante",
			"INSTALL_dataCalendarEvt"=>"Benvenuto su Omnispace!",
			"INSTALL_dataForumSubject1"=>"Benvenuto su Omnispace!",
			"INSTALL_dataForumSubject2"=>"Sentitevi liberi di condividere le vostre domande o di discutere gli argomenti che volete condividere.",
			"INSTALL_dataTaskStatus1"=>"Da fare",
			"INSTALL_dataTaskStatus2"=>"In corso",
			"INSTALL_dataTaskStatus3"=>"Da convalidare",
			"INSTALL_dataTaskStatus4"=>"Terminato",

			//// MODULO_PARAMETRAGGIO
			////
			"AGORA_generalSettings"=>"Impostazioni generali",
			"AGORA_versions"=>"Versioni",
			"AGORA_description"=>"Descrizione dello spazio",
			"AGORA_userMailDisplay"=>"Indirizzi e-mail degli utenti visibili a tutti",
			"AGORA_messengerDisplay"=>"Mostra messaggeria istantanea",			
			"AGORA_dateUpdate"=>"Aggiornato il",
			"AGORA_Changelog"=>"Visualizza il registro delle versioni",
			"AGORA_funcMailDisabled"=>"La funzione PHP per l'invio di e-mail è disattivata",
			"AGORA_funcImgDisabled"=>"La libreria PHP GD2 per la manipolazione delle immagini è disattivata",
			"AGORA_backupFull"=>"Backup completo",
			"AGORA_backupFullTooltip"=>"Salva il backup completo dello spazio: tutti i file e il database",
			"AGORA_backupDb"=>"Backup del database",
			"AGORA_backupDbTooltip"=>"Salva solo il backup del database dello spazio",
			"AGORA_backupConfirm"=>"Questa operazione può richiedere diversi minuti: confermate il download?",
			"AGORA_diskSpaceInvalid"=>"Lo spazio su disco per i file deve essere un numero intero",
			"AGORA_visioHostInvalid"=>"L indirizzo web del server videocall non è valido: deve iniziare con  https ",
			"AGORA_mapApiKeyInvalid"=>"Se si sceglie Google Map come strumento di mappatura, è necessario specificare una  API Key ",
			"AGORA_gIdentityKeyInvalid"=>"Se si sceglie la connessione opzionale tramite Google, è necessario specificare una  API Key  per Google SignIn",
			"AGORA_confirmModif"=>"Confermare le modifiche?",
			"AGORA_name"=>"Nome del sito",
			"AGORA_footerHtml"=>"Testo del piè di pagina/html",
			"AGORA_lang"=>"Lingua predefinita",
			"AGORA_timezone"=>"Fuso orario",
			"AGORA_spaceName"=>"Nome dello spazio principale",
			"AGORA_diskSpaceLimit"=>"Spazio disponibile per l'archiviazione dei file",
			"AGORA_logsTimeOut"=>"Durata della cronologia degli eventi (registri)",
			"AGORA_logsTimeOutTooltip"=>"Il periodo di conservazione della cronologia eventi riguarda l'aggiunta o la modifica degli elementi. I registri delle cancellazioni vengono conservati per almeno 1 anno.",
			"AGORA_visioHost"=>"Server di videoconferenza Jitsi",
			"AGORA_visioHostTooltip"=>"Indirizzo del server di videoconferenza Jitsi. Esempio: https://meet.jit.si",
			"AGORA_visioHostAlt"=>"Server di videoconferenza alternativo",
			"AGORA_visioHostAltTooltip"=>"Server di videoconferenza alternativo: in caso di indisponibilità del server video principale",
			"AGORA_skin"=>"Colore dell'interfaccia",
			"AGORA_black"=>"Nero",
			"AGORA_white"=>"Bianco",
			"AGORA_wallpaperLogoError"=>"Lo sfondo e il logo devono avere un estensione jpg o png",
			"AGORA_deleteWallpaper"=>"Elimina lo sfondo",
			"AGORA_logo"=>"Logo in fondo a ogni pagina",
			"AGORA_logoUrl"=>"URL",
			"AGORA_logoConnect"=>"Logo/immagine sulla pagina di accesso",
			"AGORA_logoConnectTooltip"=>"Visualizzato sopra il modulo di accesso",
			"AGORA_usersCommentLabel"=>"Consente agli utenti di commentare l'elemento",
			"AGORA_usersComment"=>"commento",
			"AGORA_usersComments"=>"commenti",
			"AGORA_usersLikeLabel"=>"Gli utenti possono mettere <i>mi piace</i> all'elemento",
			"AGORA_usersLike_likeSimple"=>"Solo like",
			"AGORA_usersLike_likeOrNot"=>"Mi piace / Non mi piace",
			"AGORA_usersLike_like"=>"Mi piace!",
			"AGORA_usersLike_dontlike"=>"Non mi piace",
			"AGORA_mapTool"=>"Strumento di mappatura",
			"AGORA_mapToolTooltip"=>"Strumento di mappatura per visualizzare utenti e contatti su una mappa",
			"AGORA_mapApiKey"=>"Chiave API per lo strumento di mappatura",
			"AGORA_mapApiKeyTooltip"=>"Chiave API per lo strumento di mappatura Google Map: <br>https://developers.google.com/maps/ <br>https://developers.google.com/maps/documentation/javascript/get-api-key",
			"AGORA_gIdentity"=>"Connessione opzionale tramite Google",
			"AGORA_gIdentityTooltip"=>"Gli utenti possono connettersi più facilmente al loro spazio attraverso il loro account Google: a tal fine, un e-mail <i>@gmail.com</ i> deve essere già registrata sull account dell'utente.",
			"AGORA_gIdentityClientId"=>"Impostazioni di accesso a Google: ID cliente",
			"AGORA_gIdentityClientIdTooltip"=>"Questa impostazione è necessaria per attivare Google Sign-In: https://developers.google.com/identity/sign-in/web/",
			"AGORA_gPeopleApiKey"=>"Impostazioni di Google People: API KEY",
			"AGORA_gPeopleApiKeyTooltip"=>"Questa impostazione è necessaria per ottenere i contatti Google/Gmail: <a href= https://developers.google.com/people/  target= _blank >https://developers.google.com/people/</a>",
			"AGORA_messengerDisabled"=>"Messaggeria istantanea attivata",
			"AGORA_moduleLabelDisplay"=>"Nome dei moduli nella barra dei menu",
			"AGORA_folderDisplayMode"=>"Modalità di visualizzazione predefinita nelle cartelle",
			"AGORA_personsSort"=>"Ordina utenti e contatti",
			//SMTP
			"AGORA_smtpLabel"=>"Connessione SMTP e sendMail",
			"AGORA_sendmailFrom"=>"E-mail  Da ",
			"AGORA_sendmailFromPlaceholder"=>"es:  noreply@mydomain.com ",
			"AGORA_smtpHost"=>"Indirizzo del server (nome host)",
			"AGORA_smtpPort"=>"Porta server",
			"AGORA_smtpPortTooltip"=>" 25  per errore.  587  o  465  per SSL/TLS",
			"AGORA_smtpSecure"=>"Tipo di connessione crittografata (opzione)",
			"AGORA_smtpSecureTooltip"=>" ssl  o  tls ",
			"AGORA_smtpUsername"=>"Nome utente",
			"AGORA_smtpPass"=>"Password",
			//LDAP
			"AGORA_ldapLabel"=>"Connessione a un server LDAP",
			"AGORA_ldapLabelTooltip"=>"Connessione a un server LDAP per la creazione di utenti sul vostro spazio: cfr. opzione   Importazione/esportazione utenti   del modulo   Utente  ",
			"AGORA_ldapUri"=>"URI LDAP",
			"AGORA_ldapUriTooltip"=>"URI LDAP completo come LDAP://nome host:porta o LDAPS://nome host:porta per la crittografia SSL",
			"AGORA_ldapPort"=>"Porta del server",
			"AGORA_ldapPortTooltip"=>"La porta utilizzata per la connessione:   389   per impostazione predefinita",
			"AGORA_ldapLogin"=>"DN dell'amministratore LDAP (Distinguished Name)",
			"AGORA_ldapLoginTooltip"=>"ad esempio   cn=admin,dc=mon-entreprise,dc=com  ",
			"AGORA_ldapPass"=>"Password dell'amministratore",
			"AGORA_ldapDn"=>"DN del gruppo (Distinguished Name)",
			"AGORA_ldapDnTooltip"=>"DN del gruppo: posizione degli utenti nella directory. Esempio   ou=mon-groupe,dc=mon-entreprise,dc=com  ",
			"importLdapFilterTooltip"=>"Filtro di ricerca LDAP (cfr. https://www.php.net/manual/function.ldap-search.php). Esempio   (cn=*)   o   (&(samaccountname=MONLOGIN)(cn=*))  ",
			"AGORA_ldapDisabled"=>"Il modulo PHP per la connessione a un server LDAP non è installato",
			"AGORA_ldapConnectError"=>"Errore di connessione al server LDAP!",

			//// MODULO_LOG
			////
			"LOG_moduleDescription"=>"Registri - Registro eventi",
			"LOG_path"=>"Percorso",
			"LOG_filter"=>"Filtro",
			"LOG_date"=>"Data/Ora",
			"LOG_spaceName"=>"spazio",
			"LOG_moduleName"=>"modulo",
			"LOG_objectType"=>"Tipo di oggetto",
			"LOG_action"=>"Azione",
			"LOG_userName"=>"Utente",
			"LOG_ip"=>"IP",
			"LOG_comment"=>"commento",
			"LOG_noLogs"=>"Nessun registro",
			"LOG_filterSince"=>"filtrato da",
			"LOG_search"=>"ricerca",
			"LOG_connexion"=>"connessione",//azione
			"LOG_add"=>"aggiungi",//azione
			"LOG_delete"=>"cancella",//azione
			"LOG_modif"=>"modifica modifica",//azione

			//// MODULE_ESPACE
			////
			"SPACE_moduleTooltip"=>"Lo spazio principale può essere suddiviso in più spazi (vedere   sottospazio  )",
			"SPACE_manageAllSpaces"=>"Gestione di tutti gli spazi",
			"SPACE_config"=>"Impostazioni dello spazio",//.."il mio spazio"
			//Indice
			"SPACE_confirmDeleteDbl"=>"Confermare l'eliminazione? Attenzione, questa azione non può essere annullata!",
			"SPACE_space"=>"spazio",
			"SPACE_spaces"=>"spazi",
			"SPACE_accessRightUndefined"=>"Da definire!",
			"SPACE_modules"=>"Moduli",
			"SPACE_addSpace"=>"Aggiungi uno spazio",
			//Modifica
			"SPACE_userAdminAccess"=>"Utenti e amministratori dello spazio",
			"SPACE_selectModule"=>"È necessario selezionare un modulo",
			"SPACE_spaceModules"=>"Moduli dello spazio",
			"SPACE_publicSpace"=>"Spazio pubblico: accesso ospiti",
			"SPACE_publicSpaceTooltip"=>"Uno spazio pubblico è aperto alle persone che non dispongono di un account utente (ospiti). Questi potranno accedere allo spazio dalla pagina iniziale. È possibile specificare una password per proteggere l'accesso a questo spazio pubblico. I moduli  Email  e  Utenti  non sono disponibili per gli ospiti.",
			"SPACE_publicSpaceNotif"=>"Il vostro spazio è pubblico: se contiene dati personali (telefono, indirizzo, ecc.) ricordatevi di specificare una password per rispettare il GDPR: General Data Protection Regulation",
			"SPACE_usersInvitation"=>"Gli utenti possono inviare inviti via e-mail",
			"SPACE_usersInvitationTooltip"=>"Tutti gli utenti possono inviare inviti via e-mail per unirsi allo spazio",
			"SPACE_allUsers"=>"Tutti gli utenti",
			"SPACE_user"=>" Utente",
			"SPACE_userTooltip"=>"Utente dello spazio: <br> Accesso normale allo spazio",
			"SPACE_admin"=>"Amministratore",
			"SPACE_adminTooltip"=>"L amministratore di uno spazio è un utente che può modificare o eliminare tutti gli elementi presenti nello spazio. Può inoltre configurare lo spazio, creare nuovi account utente, creare gruppi di utenti, inviare inviti via e-mail per aggiungere nuovi utenti, ecc,",

			// MODULO_UTILISATEUR
			//
			// Principale del menu
			"USER_headerModuleName"=>"Utente",
			"USER_moduleDescription"=>"Utenti dello spazio",
			"USER_option_allUsersAddGroup"=>"Gli utenti possono anche creare gruppi",//OPTION!
			//Indice
			"USER_spaceOrAllUsersTooltip"=>"Gestione degli utenti dello spazio visualizzato / Gestione degli utenti di tutti gli spazi (riservata all'amministratore generale)",
			"USER_spaceUsers"=>"Utenti attuali dello spazio",
			"USER_allUsers"=>"Gestione di tutti gli utenti",
			"USER_deleteDefinitely"=>"Elimina definitivamente",
			"USER_deleteFromCurSpace"=>"Disassegnare allo spazio corrente",
			"USER_deleteFromCurSpaceConfirm"=>"Disassegnare l'utente allo spazio corrente?",
			"USER_allUsersOnSpaceNotif"=>"Tutti gli utenti sono interessati da questo spazio",
			"USER_user"=>"Utente",
			"USER_users"=>"Utenti",
			"USER_addExistUser"=>"Aggiungi un utente esistente allo spazio",
			"USER_addExistUserTitle"=>"Aggiungi allo spazio un utente già esistente sul sito: assegnazione allo spazio",
			"USER_addUser"=>"Aggiungi utente",
			"USER_addUserSite"=>"Crea un utente sul sito: per impostazione predefinita, assegnato a qualsiasi spazio!",
			"USER_addUserSpace"=>"Crea un utente nello spazio corrente",
			"USER_sendCoords"=>"Invia login e password",
			"USER_sendCoordsTooltip"=>"Invia agli utenti un e-mail con il login e un link per inizializzare la password",
			"USER_sendCoordsTooltip2"=>"Invia agli utenti un e-mail con le informazioni di accesso",
			"USER_sendCoordsConfirm"=>"Le password saranno rinnovate! Continuare?",
			"USER_sendCoordsMail"=>"I dati di accesso al vostro spazio",
			"USER_noUser"=>"Nessun utente assegnato a questo spazio per il momento",
			"USER_spaceList"=>"Spazi dell'utente",
			"USER_spaceNoAffectation"=>"Nessuno spazio",
			"USER_adminGeneral"=>"Amministratore generale del sito",
			"USER_adminGeneralTooltip"=>"Attenzione: il diritto di accesso   amministratore generale   conferisce numerosi privilegi e responsabilità, in particolare la modifica di tutti gli elementi (calendari, cartelle, file, ecc.), nonché di tutti gli utenti e gli spazi. È quindi consigliabile assegnare questo privilegio a 2 o 3 utenti al massimo.<br><br>Per privilegi più limitati, scegliere il diritto di accesso   amministratore dello spazio   (vedere menu principale >   Impostare lo spazio  )",
			"USER_adminSpace"=>"Amministratore dello spazio",
			"USER_userSpace"=>"Utente dello spazio",
			"USER_profilEdit"=>"Modifica profilo",
			"USER_myProfilEdit"=>"Modifica il mio profilo utente",
			// Invito
			"USER_sendInvitation"=>"Invia inviti via e-mail",
			"USER_sendInvitationTooltip"=>"Invia inviti ai tuoi contatti, per creare un account utente e partecipare all'area di lavoro.<hr><img src= app/img/google.png  height=15> Se hai un account Google, potrai inviare inviti ai tuoi contatti Gmail.",
			"USER_mailInvitationObject"=>"Invito di ", // ..Jean DUPOND
			"USER_mailInvitationFromSpace"=>"invita a unirsi a ", // Jean DUPOND "vous invite à rejoindre l'espace" Mon Espace
			"USER_mailInvitationConfirm"=>"Fare clic qui per confermare l'invito",
			"USER_mailInvitationWait"=>"Inviti non ancora confermati",
			"USER_exired_idInvitation"=>"Il link web per il vostro invito è scaduto...",
			"USER_invitPassword"=>"Conferma l'invito",
			"USER_invitPassword2"=>"Scegli la password per confermare l'invito",
			"USER_invitationValidated"=>"Il vostro invito è stato convalidato!",
			"USER_gPeopleImport"=>"Ottieni i miei contatti dal mio indirizzo Gmail",
			"USER_importQuotaExceeded"=>"L utente è limitato a --USERS_QUOTA_REMAINING-- nuovi account utente, su un totale di --LIMITE_NB_USERS-- utenti",
			// gruppi
			"USER_spaceGroups"=>"gruppi di utenti dello spazio",
			"USER_spaceGroupsEdit"=>"modifica i gruppi di utenti dello spazio",
			"USER_groupEditInfo"=>"Ogni gruppo può essere modificato dal suo autore o dall'amministratore dello spazio",
			"USER_addGroup"=>"Aggiungi un gruppo",
			"USER_userGroups"=>"Gruppi di utenti",
			// Utilisateur_affecter
			"USER_searchPrecision"=>"Grazie per aver specificato un cognome, un nome o un indirizzo e-mail",
			"USER_userAffectConfirm"=>"Confermare le assegnazioni?",
			"USER_userSearch"=>"Cerca gli utenti da aggiungere allo spazio corrente",
			"USER_allUsersOnSpace"=>"Tutti gli utenti del sito sono già assegnati a questo spazio",
			"USER_usersSpaceAffectation"=>"Assegna gli utenti allo spazio:",
			"USER_usersSearchNoResult"=>"Nessun utente trovato",
			"USER_usersSearchBack"=>"Indietro",
			// Utilisateur_edit & CO
			"USER_langs"=>"Lingua",
			"USER_persoCalendarDisabled"=>"Calendario personale disabilitato",
			"USER_persoCalendarDisabledTooltip"=>"A ogni utente viene assegnata per impostazione predefinita un agenda personale (anche se il modulo   Calendario   non è attivato nello spazio). Selezionare questa opzione per disabilitare l'agenda personale di questo utente.",
			"USER_connectionSpace"=>"Spazio visualizzato dopo la connessione",
			"USER_loginExists"=>"Il login/email esiste già. Scegliere un altro",
			"USER_mailPresentInAccount"=>"Esiste già un account utente con questo indirizzo e-mail",
			"USER_loginAndMailDifferent"=>"Entrambi gli indirizzi e-mail devono essere identici",
			"USER_mailNotifObject"=>"Nuovo account su", // "...su" l'Agora machintruc
			"USER_mailNotifContent"=>"L account utente è stato creato su", // idem
			"USER_mailNotifContent2"=>"Connettiti con il seguente login e password",
			"USER_mailNotifContent3"=>"Grazie per aver archiviato questa e-mail",
			// Livecounter & Messenger & Visio
			"USER_messengerEdit"=>"Configura la mia messaggistica istantanea",
			"USER_messengerEdit2"=>"Configura la messaggistica istantanea",
			"USER_livecounterVisibility"=>"Visibilità su messaggistica istantanea e videoconferenza",
			"USER_livecounterAllUsers"=>"Visualizza la mia presenza quando sono connesso: messaggistica/video abilitati",
			"USER_livecounterDisabled"=>"Nascondi la mia presenza quando sono connesso: messaggistica/video disattivati",
			"USER_livecounterSomeUsers"=>"Solo alcuni utenti possono vedermi quando sono connesso",

			//// MODULO_TABLEAU BORD
			////
			// Menu principale + opzioni del modulo
			"DASHBOARD_headerModuleName"=>"Notizie",
			"DASHBOARD_moduleDescription"=>"Notizie, sondaggi ed elementi recenti",
			"DASHBOARD_option_adminAddNews"=>"Solo l'amministratore può aggiungere notizie",//OPZIONE!
			"DASHBOARD_option_disablePolls"=>"Disabilita i sondaggi",//OPZIONE!
			"DASHBOARD_option_adminAddPoll"=>"Solo l'amministratore può aggiungere sondaggi",//OPZIONE!
			//Indice
			"DASHBOARD_menuNews"=>"Notizie",
			"DASHBOARD_menuPolls"=>"Sondaggi",
			"DASHBOARD_menuElems"=>"Ultimi elementi",
			"DASHBOARD_addNews"=>"Aggiungi notizie",
			"DASHBOARD_offlineNews"=>"Mostra notizie archiviate",
			"DASHBOARD_offlineNewsNb"=>"Notizie archiviate",//"55 attualità archiviate".
			"DASHBOARD_noNews"=>"Nessuna notizia per il momento",
			"DASHBOARD_addPoll"=>"Aggiungi un sondaggio",
			"DASHBOARD_pollsVoted"=>"Mostra solo i sondaggi votati",
			"DASHBOARD_pollsVotedNb"=>"sondaggi per i quali ho già votato",//"55 sondaggi..déjà voté"
			"DASHBOARD_vote"=>"Vota e vedi i risultati!",
			"DASHBOARD_voteTooltip"=>"I voti sono anonimi: nessuno saprà la tua scelta di voto",
			"DASHBOARD_answerVotesNb"=>"Votate --NB_VOTES-- volte",
			"DASHBOARD_pollVotesNb"=>"Il sondaggio è stato votato --NB_VOTES-- volte",
			"DASHBOARD_pollVotedBy"=>"Votato da",//Bibi, boby, ecc.
			"DASHBOARD_noPoll"=>"Nessun sondaggio per il momento",
			"DASHBOARD_plugins"=>"Nuovi elementi",
			"DASHBOARD_pluginsTooltip"=>"Elementi creati",
			"DASHBOARD_pluginsTooltip2"=>"tra",
			"DASHBOARD_plugins_day"=>"di oggi",
			"DASHBOARD_plugins_week"=>"di questa settimana",
			"DASHBOARD_plugins_month"=>"del mese",
			"DASHBOARD_plugins_previousConnection"=>"dall'ultimo accesso",
			"DASHBOARD_pluginsTooltipRedir"=>"Visualizza l'elemento nella cartella",
			"DASHBOARD_pluginEmpty"=>"Nessun nuovo elemento per questo periodo",
			// Attualità/Notizie
			"DASHBOARD_topNews"=>"Top news",
			"DASHBOARD_topNewsTooltip"=>"Notizie in cima all'elenco",
			"DASHBOARD_offline"=>"Notizie archiviate",
			"DASHBOARD_dateOnline"=>"Data online",
			"DASHBOARD_dateOnlineTooltip"=>"Selezionare una data per mettere automaticamente online le notizie.<br>Nel frattempo, le notizie sono offline",
			"DASHBOARD_dateOnlineNotif"=>"Le notizie sono momentaneamente archiviate",
			"DASHBOARD_dateOffline"=>"Data di archiviazione",
			"DASHBOARD_dateOfflineTooltip"=>"Selezionare una data per archiviare automaticamente le notizie",
			// Sondaggio
			"DASHBOARD_titleQuestion"=>"Titolo / Domanda",
			"DASHBOARD_multipleResponses"=>"Sono possibili più risposte per ogni voto",
			"DASHBOARD_newsDisplay"=>"Mostra con le notizie (menu a sinistra)",
			"DASHBOARD_publicVote"=>"Voto pubblico: la scelta dei votanti è pubblica",
			"DASHBOARD_publicVoteInfos"=>"Si noti che il voto pubblico può costituire un ostacolo alla partecipazione al sondaggio",
			"DASHBOARD_dateEnd"=>"Fine delle votazioni",
			"DASHBOARD_responseList"=>"Risposte possibili",
			"DASHBOARD_responseNb"=>"Risposta n°",
			"DASHBOARD_addResponse"=>"Aggiungi una risposta",
			"DASHBOARD_controlResponseNb"=>"Specificare almeno 2 risposte possibili",
			"DASHBOARD_votedPollNotif"=>"Attenzione: non appena il sondaggio viene votato, non è più possibile modificare il titolo o le risposte",
			"DASHBOARD_voteNoResponse"=>"Selezionare una risposta",
			"DASHBOARD_exportPoll"=>"Scarica i risultati del sondaggio in formato pdf",
			"DASHBOARD_exportPollDate"=>"risultato del sondaggio a partire da",

			//// MODULO_FICHIER
			////
			// Menu principale
			"FILE_headerModuleName"=>"File manager",
			"FILE_moduleDescription"=>"File manager",
			"FILE_option_adminRootAddContent"=>"Solo l'amministratore può aggiungere cartelle e file nella cartella principale",//OPTION!
			//Indice
			"FILE_addFile"=>"Aggiungi file",
			"FILE_addFileAlert"=>"Cartella sul server non accessibile per iscritto! Si prega di contattare l'amministratore",
			"FILE_downloadSelection"=>"Selezione download",
			"FILE_fileDownload"=>"Download",
			"FILE_fileSize"=>"Dimensione file",
			"FILE_imageSize"=>"Dimensione immagine",
			"FILE_nbFileVersions"=>"Versioni del file",//"55 versioni del file".
			"FILE_downloadsNb"=>"(scaricato --NB_DOWNLOAD-- volte)",
			"FILE_downloadedBy"=>"file scaricato da",//"..boby, will"
			"FILE_addFileVersion"=>"aggiungi una nuova versione di file",
			"FILE_noFile"=>"Nessun file per il momento",
			// Fichier_edit & Dossier_edit & fichier_edit_ajouter & Versions_fichier
			"FILE_fileSizeLimit"=>"I file non devono superare", // ...2 Mega ottetti
			"FILE_uploadSimple"=>"Caricamento semplice",
			"FILE_uploadMultiple"=>"Caricamento multiplo",
			"FILE_imgReduce"=>"Ottimizza l'immagine",
			"FILE_updatedName"=>"Il nome del file verrà sostituito dalla nuova versione",
			"FILE_fileSizeError"=>"Il file è troppo grande",
			"FILE_addMultipleFilesTooltip"=>"Pulsante  Shift  o  Ctrl  per selezionare più file",
			"FILE_selectFile"=>"Grazie per aver selezionato almeno un file",
			"FILE_fileContent"=>"Contenuto",
			// Versioni_fichier
			"FILE_versionsOf"=>"Versioni di", // versions de fichier.gif
			"FILE_confirmDeleteVersion"=>"Confermare la rimozione di questa versione?",

			//// MODULO_AGENDA
			////
			// Principale del menu
			"CALENDAR_headerModuleName"=>"Calendario",
			"CALENDAR_moduleDescription"=>"Calendario personale e condiviso",
			"CALENDAR_option_adminAddRessourceCalendar"=>"Solo l'amministratore può aggiungere calendari di risorse",//OPZIONE!
			"CALENDAR_option_adminAddCategory"=>"Solo l'amministratore può aggiungere una categoria di eventi",//OPZIONE!
			"CALENDAR_option_createSpaceCalendar"=>"Crea un calendario condiviso per questo spazio",//OPZIONE!
			"CALENDAR_moduleAlwaysEnabledInfo"=>"Gli utenti che non hanno disattivato il calendario personale nel loro profilo utente vedranno comunque il modulo Calendario nella barra dei menu",
			//Index
			"CALENDAR_calsList"=>"Calendari disponibili",
			"CALENDAR_calsListDisplayAll"=>"Mostra tutti i calendari (per gli amministratori)",
			"CALENDAR_hideAllCals"=>"Nascondi tutti i calendari",
			"CALENDAR_printCalendars"=>"Stampa i calendari",
			"CALENDAR_printCalendarsInfos"=>"Stampa in modalità orizzontale",
			"CALENDAR_addSharedCalendar"=>"Aggiungi un calendario condiviso",
			"CALENDAR_addSharedCalendarTooltip"=>"Aggiungi un calendario condiviso :<br>per le prenotazioni di una stanza, un veicolo, un videoproiettore, ecc,",
			"CALENDAR_exportIcal"=>"Esporta gli eventi (iCal)",
			"CALENDAR_icalUrl"=>"Copia il link/url per visualizzare il calendario su un applicazione esterna",
			"CALENDAR_icalUrlCopy"=>"Consente di leggere gli eventi del calendario tramite un applicazione esterna come Microsoft Outlook, Google Calendar, Mozilla Thunderbird, ecc,",
			"CALENDAR_importIcal"=>"Importa gli eventi (iCal)",
			"CALENDAR_ignoreOldEvt"=>"Non importare eventi più vecchi di un anno",
			"CALENDAR_importIcalState"=>"Stato",
			"CALENDAR_importIcalStatePresent"=>"Già presente",
			"CALENDAR_importIcalStateImport"=>"Da importare",
			"CALENDAR_display_day"=>"Giorno",
			"CALENDAR_display_4Days"=>"4 giorni",
			"CALENDAR_display_workWeek"=>"Settimana lavorativa",
			"CALENDAR_display_week"=>"Settimana",
			"CALENDAR_display_month"=>"Mese",
			"CALENDAR_weekNb"=>"Vedere il numero della settimana",
			"CALENDAR_periodNext"=>"Periodo successivo",
			"CALENDAR_periodPrevious"=>"Periodo precedente",
			"CALENDAR_evtAffects"=>"Nel calendario di",
			"CALENDAR_evtAffectToConfirm"=>"Conferma in attesa nel calendario di",
			"CALENDAR_evtProposed"=>"Proposte di eventi da confermare",
			"CALENDAR_evtProposedBy"=>"Proposto da",//..Mr SMITH
			"CALENDAR_evtProposedConfirm"=>"Conferma la proposta",
			"CALENDAR_evtProposedConfirmBis"=>"La proposta di evento è stata integrata nel calendario",
			"CALENDAR_evtProposedConfirmMail"=>"La proposta di evento è stata confermata",
			"CALENDAR_evtProposedDecline"=>"Rifiuta la proposta",
			"CALENDAR_evtProposedDeclineBis"=>"La proposta è stata rifiutata",
			"CALENDAR_evtProposedDeclineMail"=>"La proposta di evento è stata rifiutata",
			"CALENDAR_deleteEvtCal"=>"Cancellare solo per questo calendario?",
			"CALENDAR_deleteEvtCals"=>"Eliminare per tutti i calendari?",
			"CALENDAR_deleteEvtDate"=>"Cancellare solo per questa data?",
			"CALENDAR_evtPrivate"=>"Evento privato",
			"CALENDAR_evtAutor"=>"Eventi creati da me",
			"CALENDAR_evtAutor2"=>"Mostra solo gli eventi che ho creato",
			"CALENDAR_noEvt"=>"Nessun evento",
			"CALENDAR_synthese"=>"Sintesi dei calendari",
			"CALENDAR_calendarsPercentBusy"=>"Calendari occupati",
			"CALENDAR_noCalendarDisplayed"=>"Nessun calendario visualizzato",
			// Serata
			"CALENDAR_importanceNormal"=>"Importanza normale",
			"CALENDAR_importanceHight"=>"Importanza elevata",
			"CALENDAR_visibilityPublic"=>"Visibilità normale",
			"CALENDAR_visibilityPrivate"=>"Visibilità privata",
			"CALENDAR_visibilityPublicHide"=>"Visibilità semiprivata",
			"CALENDAR_visibilityTooltip"=>"<u>visibilità privata</ u>: visibile solo a coloro il cui evento è accessibile per iscritto <br><br> <u>visibilità semiprivata</u>: viene visualizzata solo la fascia oraria (senza titolo e dettagli) se l'evento è di sola lettura",
			// Agenda/Evento: modificare
			"CALENDAR_sharedCalendarDescription"=>"Calendario condiviso dello spazio",
			"CALENDAR_noPeriodicity"=>"Solo una volta",
			"CALENDAR_period_weekDay"=>"Ogni settimana",
			"CALENDAR_period_month"=>"Ogni mese",
			"CALENDAR_period_year"=>"Ogni anno",
			"CALENDAR_periodDateEnd"=>"Fine della ricorrenza",
			"CALENDAR_periodException"=>"Eccezione di ricorrenza",
			"CALENDAR_calendarAffectations"=>"Assegnazione ai seguenti calendari",
			"CALENDAR_addEvt"=>"Aggiungi un evento",
			"CALENDAR_addEvtTooltip"=>"Aggiungi un evento",
			"CALENDAR_addEvtTooltipBis"=>"Aggiungi l'evento al calendario",
			"CALENDAR_proposeEvtTooltip"=>"Proporre un evento all'amministratore del calendario",
			"CALENDAR_proposeEvtTooltipBis"=>"Proporre l'evento all'amministratore/proprietario del calendario",
			"CALENDAR_proposeEvtTooltipBis2"=>"Proporre l'evento all'amministratore/proprietario del calendario: il calendario è accessibile solo in lettura",
			"CALENDAR_inputProposed"=>"L'evento verrà proposto all'amministratore del calendario",
			"CALENDAR_verifCalNb"=>"Grazie per aver selezionato un calendario",
			"CALENDAR_noModifTooltip"=>"Modifica vietata perché non si ha accesso alla scrittura in questo calendario",
			"CALENDAR_editLimit"=>"Non sei l'autore dell'evento: puoi solo gestire le assegnazioni dei calendari",
			"CALENDAR_busyTimeslot"=>"Lo slot è già occupato in questo calendario:",
			"CALENDAR_timeSlot"=>"Intervallo di tempo della visualizzazione della   settimana  ",
			"CALENDAR_propositionNotif"=>"Notifica via e-mail di ogni proposta di evento",
			"CALENDAR_propositionNotifTooltip"=>"Nota: ogni proposta di evento viene convalidata o invalidata dall'amministratore del calendario",
			"CALENDAR_propositionGuest"=>"Gli ospiti possono proporre eventi",
			"CALENDAR_propositionGuestTooltip"=>"Nota: ricordarsi di selezionare  tutti gli utenti e gli ospiti  nei diritti di accesso sottostanti.",
			"CALENDAR_propositionEmailSubject"=>"Nuovo evento proposto da",//.. "boby SMITH"
			"CALENDAR_propositionEmailMessage"=>"Nuovo evento proposto da --AUTOR_LABEL-- : &nbsp; <i><b>--EVT_TITLE_DATE--</b></i> <br><i>--EVT_DESCRIPTION--</i> <br>Accedi al tuo spazio per confermare o annullare questa proposta",
			// Categoria : Catégories d événement
			"CALENDAR_categoryMenuTooltip"=>"Mostra solo gli eventi con categoria",
			"CALENDAR_categoryShowAll"=>"Tutte le categorie",
			"CALENDAR_categoryUndefined"=>"Senza categoria",
			"CALENDAR_categoryEditTitle"=>"Modifica categorie",
			"CALENDAR_categoryEditInfo"=>"Ogni categoria di eventi può essere modificata dal suo autore o dall'amministratore generale",
			"CALENDAR_categoryEditAdd"=>"Aggiungi una categoria di eventi",

			//// MODULO_FORUM
			////
			// Principale del menu
			"FORUM_headerModuleName"=>"Forum",
			"FORUM_moduleDescription"=>"Forum",
			"FORUM_option_adminAddSubject"=>"Solo l'amministratore può aggiungere argomenti",//OPZIONE!
			"FORUM_option_adminAddTheme"=>"Solo l'amministratore può aggiungere temi",//OPZIONE!
			// TRI
			"SORT_dateLastMessage"=>"Ultimo messaggio",
			//Index & Sujet
			"FORUM_forumRoot"=>"Home del forum",
			"FORUM_subject"=>"Argomento",
			"FORUM_subjects"=>"Argomenti",
			"FORUM_message"=>"Messaggio",
			"FORUM_messages"=>"Messaggi",
			"FORUM_lastMessage"=>"ultimo da",
			"FORUM_noSubject"=>"Nessun oggetto per il momento",
			"FORUM_noMessage"=>"Nessun messaggio per il momento",
			"FORUM_subjectBy"=>"Oggetto da",
			"FORUM_addSubject"=>"Nuovo argomento",
			"FORUM_displaySubject"=>"Visualizza argomento",
			"FORUM_addMessage"=>"Risposta",
			"FORUM_quoteMessage"=>"Rispondi e cita questo messaggio",
			"FORUM_notifyLastPost"=>"Notifica via e-mail",
			"FORUM_notifyLastPostTooltip"=>"Inviami una notifica via e-mail per ogni nuovo messaggio",
			// Modifica_di_getto e modifica_di_messaggio
			"FORUM_notifOnlyReadAccess"=>"Se l'accesso è solo in lettura, nessuno può contribuire all'argomento",
			"FORUM_notifWriteAccess"=>" l'accesso in scrittura  è destinato ai moderatori :<br>Preferite piuttosto i diritti di   Scrittura limitata  ",
			// Categoria : Temi
			"FORUM_categoryMenuTooltip"=>"Mostra solo argomenti con tema",
			"FORUM_categoryShowAll"=>"Tutti i temi",
			"FORUM_categoryUndefined"=>"Senza tema",
			"FORUM_categoryEditTitle"=>"Modifica temi",
			"FORUM_categoryEditInfo"=>"Ogni tema può essere modificato dal suo autore o dall'amministratore generale",
			"FORUM_categoryEditAdd"=>"Aggiungi un tema",

			//// MODULE_TACHE
			////
			// Principale del menu
			"TASK_headerModuleName"=>"Compiti",
			"TASK_moduleDescription"=>"Attività",
			"TASK_option_adminRootAddContent"=>"Solo l'amministratore può aggiungere cartelle e attività nella cartella principale",//OPZIONE!
			"TASK_option_adminAddStatus"=>"Solo l'amministratore può creare uno stato Kanban",//OPZIONE!
			// TRI
			"SORT_priority"=>"Priorità",
			"SORT_advancement"=>"Avanzamento",
			"SORT_dateBegin"=>"Data inizio",
			"SORT_dateEnd"=>"Data fine",
			//Indice
			"TASK_addTask"=>"Aggiungi un attività",
			"TASK_noTask"=>"Nessuna attività per il momento",
			"TASK_advancement"=>"Avanzamento",
			"TASK_advancementAverage"=>"Avanzamento medio",
			"TASK_priority"=>"Priorità",
			"TASK_priorityUndefined"=>"Priorità non definita",
			"TASK_priority1"=>"Bassa",
			"TASK_priority2"=>"Media",
			"TASK_priority3"=>"Alta",
			"TASK_assignedTo"=>"Assegnato a",
			"TASK_advancementLate"=>"Avanzamento ritardato",
			"TASK_folderDateBeginEnd"=>"Data di inizio più precoce / data di fine più recente",
			//Categoria : Statuts Kanban
			"TASK_categoryMenuTooltip"=>"Mostra solo le attività con stato",
			"TASK_categoryShowAll"=>"Tutti gli stati",
			"TASK_categoryUndefined"=>"Stato non definito",
			"TASK_categoryEditTitle"=>"Modifica stato",
			"TASK_categoryEditInfo"=>"Ogni stato può essere modificato dal suo autore o dall'amministratore generale",
			"TASK_categoryEditAdd"=>"Aggiungi uno stato",

			//// MODULO_CONTATTO
			////
			// Menu principale
			"CONTACT_headerModuleName"=>"Contatti",
			"CONTACT_moduleDescription"=>"Directory di contatti",
			"CONTACT_option_adminRootAddContent"=>"Solo l'amministratore può aggiungere cartelle e contatti nella cartella principale",//OPTION!
			//Indice
			"CONTACT_addContact"=>"Aggiungi un contatto",
			"CONTACT_noContact"=>"Nessun contatto per il momento",
			"CONTACT_createUser"=>"Crea un utente in questo spazio",
			"CONTACT_createUserConfirm"=>"Creare un utente in questo spazio a partire da questo contatto?",
			"CONTACT_createUserConfirmed"=>"L utente è stato creato con successo",

			//// MODULE_LIEN
			////
			// Principale del menu
			"LINK_headerModuleName"=>"Segnalibri",
			"LINK_moduleDescription"=>"Segnalibri",
			"LINK_option_adminRootAddContent"=>"Solo l'amministratore può aggiungere cartelle e segnalibri alla cartella principale",//OPTION!
			//Indice
			"LINK_addLink"=>"Aggiungi un segnalibro",
			"LINK_noLink"=>"Nessun segnalibro al momento",
			// modifica_di_liene e modifica_di_dossier
			"LINK_adress"=>"segnalibro",

			//// MODULO_MAIL
			////
			// Menu principale
			"MAIL_headerModuleName"=>"Email",
			"MAIL_moduleDescription"=>"Invia e-mail con un clic!",
			//Indice
			"MAIL_specifyMail"=>"Grazie per aver inserito un indirizzo e-mail",
			"MAIL_title"=>"Oggetto dell'e-mail",
			"MAIL_description"=>"Messaggio e-mail",
			// Storico e-mail
			"MAIL_historyTitle"=>"Cronologia delle e-mail inviate",
			"MAIL_delete"=>"Elimina questa e-mail",
			"MAIL_resend"=>"Reinvia questa e-mail",
			"MAIL_resendInfo"=>"Recupera il contenuto di questa e-mail e lo integra direttamente nell'editor per un nuovo invio",
			"MAIL_historyEmpty"=>"Nessuna email",
			"MAIL_recipients"=>"Destinatari",
			"MAIL_attachedFileError"=>"Il file non è stato aggiunto all'e-mail perché troppo grande",
		);
	}

	/*
	 * Giorni festivi dell'anno
	 */
	public static function celebrationDays($year)
	{
		// Init
		$dateList=[];

		//Feste mobili (se esiste la funzione di recupero delle pazze)
		if(function_exists("easter_date"))
		{
			$daySecondes=86400;
			$paquesTime=easter_date($year);
			$date=date("Y-m-d", $paquesTime+$daySecondes);
			$dateList[$date]="Lunedì di Pasqua";
		}

		//Feste fisse
		$dateList[$year."-01-01"]="Capodanno";
		$dateList[$year."-12-25"]="Natale";

		//Ritornare al risultato
		return $dateList;
	}
}
