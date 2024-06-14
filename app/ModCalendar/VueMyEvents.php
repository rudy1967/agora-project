<script>
////	Resize
lightboxSetWidth(700);
</script>

<style>
.vEventLine		{display:table; width:100%; margin:5px;}
.vEventLine>div	{display:table-cell;}
.vEventDate		{width:200px;}
.vEventOptions	{width:50px;}

/*MOBILE FANCYBOX (440px)*/
@media screen and (max-width:440px){
	.vEventDate		{width:80px;}
}
</style>


<div>
	<div class="lightboxTitle"><?= Txt::trad("CALENDAR_evtAutor") ?></div>

	<!--LISTE DES EVT-->
	<?php foreach($myEvents as $tmpEvent){ ?>
	<div class="vEventLine lineHover" title="<?= Txt::dateLabel($tmpEvent->dateBegin,"basic",$tmpEvent->dateEnd) ?><br><?= $tmpEvent->description ?>">
		<div class="vEventDate"><?= Txt::dateLabel($tmpEvent->dateBegin,"basic",$tmpEvent->dateEnd) ?></div>
		<div><?= $tmpEvent->title ?></div>
		<div class="vEventOptions">
			<img src="app/img/edit.png" onclick="lightboxOpen('<?= $tmpEvent->getUrl("edit") ?>')">
			<img src="app/img/delete.png" onclick="confirmDelete('<?= $tmpEvent->getUrl("delete") ?>')">
		</div>
	</div>
	<?php } ?>
	<!--AUCUN EVT-->
	<?php if(empty($myEvents)){echo "<h3>".Txt::trad("CALENDAR_noEvt")."</h3>";} ?>
</div>