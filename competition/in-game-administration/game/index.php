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
      <div class="iga-team-info">
	    playerlist
	  </div>
	  <div class="iga-info">
	    info
	  </div>
      <div class="iga-team-info">
	    playerlist
	  </div>
    </section>



    <section aria-label="Section Competition" class="section-container section-iga-iig">
      <div class="iga-player-list">
	    playerlist
	  </div>
	  <div class="iga-panel">
	    info
	  </div>
      <div class="iga-player-list">
	    playerlist
	  </div>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/competition.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>