<?php 
  $page='dashboard';
  $menu='min';
  $channel='competition';
  $subchannel='in-game-administration';
  $report='no';
  $report_link='';
  $report_label='';
  $backto_link='competition/in-game-administration/'; $backto_label='In Game Administration';
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<link rel="stylesheet" type="text/css" href="css/competition.css?<?php echo $anticache; ?>"/>
<div class="rancak-container">
  <span class="width-max">

    <section aria-label="Section Competition" class="section-container section-iga-iig">
      <?php $iga_time='first-half'; require ($_SERVER['SCOUTDB'].'module/ingame-head.php')?>
    </section>



    <section aria-label="Section Competition" class="section-container section-recap-tab content_center">
      <span>
		<?php $recap_curr='info'; require ($_SERVER['SCOUTDB'].'module/recap-tab.php')?>
	  </span>
    </section>



    <section aria-label="Section Competition" class="section-container section-recap-content">
      <span>
	    <?php require ($_SERVER['SCOUTDB'].'competition/in-game-administration/recap/recap-content-info.php')?>
	    <?php require ($_SERVER['SCOUTDB'].'competition/in-game-administration/recap/recap-content-event.php')?>
	    <?php require ($_SERVER['SCOUTDB'].'competition/in-game-administration/recap/recap-content-lineup.php')?>
	  </span>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/competition.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>