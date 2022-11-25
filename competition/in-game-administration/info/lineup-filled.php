<?php 
  $page='dashboard';
  $menu='full';
  $channel='competition';
  $subchannel='in-game-administration';
  $report='no';
  $report_link='';
  $report_label='';
  $backto_link='competition/in-game-administration/info/'; $backto_label='Match Info';
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-competition.php')?>
<link rel="stylesheet" type="text/css" href="css/competition.css?<?php echo $anticache; ?>"/>
<div class="rancak-container">
  <span class="width-max">

    <section aria-label="Section Competition" class="section-container">
	  <h2 class="section-title">
        <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/menu-competition.svg')?></div>
        <div class="section-title-label">Line Up</div>
	  </h2>
      <div class="choose-lineup">
	    <div class="choose-lineup-column">
		  <div class="clc-container">
		    <div class="clc-container-label">Starting Lineup</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 11 ; $i++) { ?>
                <?php $clc_mode='box'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		  
		  <div class="clc-container">
		    <div class="clc-container-label">Subtitution</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 11 ; $i++) { ?>
                <?php $clc_mode='form'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		  
		  <div class="clc-container">
		    <div class="clc-container-label">Reserved</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 5 ; $i++) { ?>
                <?php $clc_mode='form'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		</div>
		
		
		
	    <div class="choose-lineup-column">
		  <div class="clc-container">
		    <div class="clc-container-label">Starting Lineup</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 3 ; $i++) { ?>
                <?php $clc_mode='box'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
              <?php for ($i=1; $i <= 8 ; $i++) { ?>
                <?php $clc_mode='form'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		  
		  <div class="clc-container">
		    <div class="clc-container-label">Subtitution</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 11 ; $i++) { ?>
                <?php $clc_mode='form'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		  
		  <div class="clc-container">
		    <div class="clc-container-label">Reserved</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 5 ; $i++) { ?>
                <?php $clc_mode='form'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		</div>
	  </div>
		
		
		
      <div class="match-info-row match-info-submit">
        <button class="btn content_center" onclick="location.href='competition/in-game-administration/game/';">
          Save Data
        </button>
      </div>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/competition.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>