<?php 
  $page='dashboard';
  $channel='practice';
  $backto_link='practice/'; $backto_label='Practice';
  require ('../../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php $practice_result='none'; require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<div class="rancak-container">
  <span class="width-max">

    <section aria-label="Breadcrumb" class="breadcrumb">
      <a aria-label="Home" title="Home" class="breadcrumb-link content_center" href="home.php">
        <?php require ($_SERVER['SCOUTDB'].'img/icon/home.svg')?>
      </a>
      <a aria-label="Practice" title="Practice" class="breadcrumb-link content_center" href="practice/">
        <span>Practice</span>
      </a>
      <div class="breadcrumb-link content_center">
        <span>Team_Full_Name FC</span>
      </div>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <h2 class="section-title">
	    <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/section-title.svg')?></div>
	    <div class="section-title-label">Choose Your Player</div>
	  </h2>
      <div class="player-list">
        <?php for ($i=1; $i <= 20 ; $i++) { ?>
          <?php $player_link='practice/team/player/'; require ($_SERVER['SCOUTDB'].'module/player-list.php')?>
        <?php } ?>
      </div>
    </section>
	
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>