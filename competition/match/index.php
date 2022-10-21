<?php 
  $page='dashboard';
  $menu='full';
  $channel='competition';
  $subchannel='player-scouting';
  $report='no';
  $report_link='';
  $report_label='';
  $backto_link='competition/'; $backto_label='player scouting';
  require ('../../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-competition.php')?>
<link rel="stylesheet" type="text/css" href="css/competition.css?<?php echo $anticache; ?>"/>
<div class="rancak-container">
  <span class="width-max split-versus">

    <section aria-label="Section Competition" class="section-container">
      <h2 class="section-title">
	    <div class="section-title-icon"><img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(1,20); ?>.svg" /></div>
	    <div class="section-title-label">Team A</div>
	  </h2>
      <div class="player-list">
        <?php for ($i=1; $i <= 11 ; $i++) { ?>
          <?php $player_link='competition/match/player/'; require ($_SERVER['SCOUTDB'].'module/player-list.php')?>
        <?php } ?>
      </div>
    </section>



    <section aria-label="Section Competition" class="section-container">
      <h2 class="section-title">
	    <div class="section-title-icon"><img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(1,20); ?>.svg" /></div>
	    <div class="section-title-label">Team B</div>
	  </h2>
      <div class="player-list">
        <?php for ($i=1; $i <= 11 ; $i++) { ?>
          <?php $player_link='competition/match/player/'; require ($_SERVER['SCOUTDB'].'module/player-list.php')?>
        <?php } ?>
      </div>
    </section>
	
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>