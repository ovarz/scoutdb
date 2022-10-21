<?php 
  $page='dashboard';
  $menu='full';
  $channel='competition';
  $subchannel='player-scouting';
  $report='no';
  $report_link='';
  $report_label='';
  $backto_link='competition/match/'; $backto_label='player';
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-competition.php')?>
<link rel="stylesheet" type="text/css" href="css/competition.css?<?php echo $anticache; ?>"/>
<div class="rancak-container ">
  <span class="width-max">
	
	

    <section aria-label="Section Competition" class="section-container">
      <div class="player-scouting-detail">
	    <div class="psd-container psd-container-center">
		  <div class="psd-box psd-main">
		    <div class="psd-main-head">
			  <button title="PlayerBio" class="psd-main-button psd-main-curr">Player Bio</button>
			  <button title="PlayerStat" class="psd-main-button">Player Stat</button>
			  <button title="Video" class="psd-main-button">Video</button>
			  <button title="Notes" class="psd-main-button">Notes</button>
			</div>
			<div class="psd-main-content">tes</div>
		  </div>
		  
		  <div class="psd-center-split">
		    <div class="psd-box">
			  <?php $scout_button='default'; $scout_label='atck'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			  <?php $scout_button='card'; $scout_label='card'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
              <div class="psd-row psd-row-action psd-row-single">
                <button class="psd-button content_center">
                  Undo
                </button>
              </div>
			</div>
		    <div class="psd-box">
			  <div class="psd-row">
			    <div class="psd-row-misc content_center">
				  <span>- One on One -</span>
				</div>
			  </div>
			  <?php $scout_button='default'; $scout_label='frek'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			  <div class="psd-row">
			    <div class="psd-row-misc content_center">
				  <img alt="img_title" class="lazyload" data-original="img/logo.png">
				</div>
			  </div>
			</div>
		    <div class="psd-box">
			  <?php $scout_button='default'; $scout_label='defs'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
              <div class="psd-row psd-row-action psd-row-single">
                <button class="psd-button content_center">
                  Subtituted Out
                </button>
              </div>
              <div class="psd-row psd-row-action psd-row-single">
                <button class="psd-button psd-button-end content_center">
                  End Match
                </button>
              </div>
			</div>
		  </div>
		</div>
		
		
		
		<div class="psd-container-left">
          <div class="psd-box">
            <?php $scout_button='plusminus'; $scout_label='goal'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='plusminus'; $scout_label='asst'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='plusminus'; $scout_label='foul'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='plusminus'; $scout_label='offs'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='default'; $scout_label='pnlt'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='default'; $scout_label='cner'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
            <?php $scout_button='default'; $scout_label='jump'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<div class="psd-row psd-row-action psd-row-movement">
			  <button class="psd-button psd-button-stand psd-button-curr content_center">
				<?php require ($_SERVER['SCOUTDB'].'img/icon/stand.svg')?>
			  </button>
			  <button class="psd-button psd-button-walk content_center">
				<?php require ($_SERVER['SCOUTDB'].'img/icon/walk.svg')?>
			  </button>
			  <button class="psd-button psd-button-run content_center">
				<?php require ($_SERVER['SCOUTDB'].'img/icon/run.svg')?>
			  </button>
			</div>
            <?php $scout_button='default'; $scout_label='ctrl'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
          </div>
		</div>
		
		
		
		<div class="psd-container-right">
          <div class="psd-box">
            <?php $scout_button='default'; $scout_label='head'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='default'; $scout_label='tack'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='default'; $scout_label='shot'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
          </div>
          <div class="psd-box psd-box-pass">
		    <div class="psd-box-title content_center">
			  <span>Passing</span>
			</div>
            <?php $scout_button='default'; $scout_label='thrg'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='default'; $scout_label='cros'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='default'; $scout_label='long'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='default'; $scout_label='shrt'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
          </div>
		</div>
	  </div>
    </section>
	
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>