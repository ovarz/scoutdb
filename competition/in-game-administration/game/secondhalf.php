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
      <?php $iga_time='second-half'; require ($_SERVER['SCOUTDB'].'module/ingame-head.php')?>
    </section>



    <section aria-label="Section Competition" class="section-container section-iga-iig">
      <div class="iga-player-list">
	    <?php $clc_mode='box'; $clc_bottom='info'; $clc_card='yellow'; $clc_goal=''; $clc_pen=''; 
		require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
	    <?php $clc_mode='box'; $clc_bottom='info'; $clc_card=''; $clc_goal='1'; $clc_pen='success'; 
		require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
        <?php for ($i=1; $i <= 9 ; $i++) { ?>
          <?php $clc_mode='box'; $clc_bottom='info'; $clc_card=''; $clc_goal=''; $clc_pen='';
		  require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
        <?php } ?>
	  </div>
	  <div class="iga-panel psd-box">
	    <?php $scout_button='start'; $scout_label='pause match'; require ($_SERVER['SCOUTDB'].'module/scout-button-misc.php')?>
	    <?php $scout_button='default'; $scout_label='goal'; require ($_SERVER['SCOUTDB'].'module/scout-button-misc.php')?>
	    <?php $scout_button='default'; $scout_label='subs'; require ($_SERVER['SCOUTDB'].'module/scout-button-misc.php')?>
	    <?php $scout_button='card'; $scout_label='card'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
		<?php $scout_button='default'; $scout_label='pnlt'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
	    <?php $scout_button='default'; $scout_label='undo'; require ($_SERVER['SCOUTDB'].'module/scout-button-misc.php')?>
	    <div class="psd-row psd-row-action psd-row-single">
		  <button class="psd-button psd-button-end content_center" onclick="location.href='competition/in-game-administration/recap/';">
			End Match
		  </button>
		</div>
	  </div>
      <div class="iga-player-list">
	    <?php $clc_mode='box'; $clc_bottom='info'; $clc_card=''; $clc_goal='2'; $clc_pen=''; 
		require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
	    <?php $clc_mode='box'; $clc_bottom='info'; $clc_card='red'; $clc_goal=''; $clc_pen='fail'; 
		require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
        <?php for ($i=1; $i <= 9 ; $i++) { ?>
          <?php $clc_mode='box'; $clc_bottom='info'; $clc_card=''; $clc_goal=''; $clc_pen='';
		  require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
        <?php } ?>
	  </div>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/competition.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>