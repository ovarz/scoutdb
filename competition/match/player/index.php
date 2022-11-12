<?php 
  $page='dashboard';
  $menu='min';
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
<link rel="stylesheet" type="text/css" href="css/competition.css?<?php echo $anticache; ?>"/>
<div class="rancak-container ">
  <span class="width-max">
	
	

    <section aria-label="Section Competition" class="section-container">
      <?php require ($_SERVER['SCOUTDB'].'module/panel-header.php')?>
	  
      <div class="player-scouting-detail">
	    <div class="psd-container psd-container-center">
	
		  <div class="psd-box psd-main">
		    <div class="psd-main-head">
			  <button title="Player Bio" data-content="practice-player-profile"
			  class="psd-main-button psd-main-curr">Player Bio</button>
			  <button title="Player Stat" data-content="competition-player-stat" 
			  class="psd-main-button">Player Stat</button>
			  <button title="Video" data-content="competition-video"
			  class="psd-main-button">Video</button>
			  <button title="Notes" data-content="comment"
			  class="psd-main-button">Notes</button>
			</div>
			<div class="psd-main-content"><?php $comment_reply='yes'; require ($_SERVER['SCOUTDB'].'module/practice-player-profile.php')?></div>
		  </div>
		  
		  <div class="psd-center-split">
		    <div class="psd-box psd-split-left">
			  <?php $scout_button='default'; $scout_label='atck'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			  <?php $scout_button='card'; $scout_label='card'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
              <div class="psd-row psd-row-action psd-row-single">
                <button class="psd-button content_center">
                  Undo
                </button>
              </div>
			</div>
		    <div class="psd-box psd-split-center">
			  <div class="psd-row">
			    <div class="psd-row-misc content_center">
				  <img alt="img_title" class="lazyload" data-original="img/logo.png">
				</div>
			  </div>
			  <?php $scout_button='default'; $scout_label='frek'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
              <div class="psd-row psd-row-action psd-row-single">
                <button class="psd-button psd-button-start content_center">
                  Start Match
                </button>
              </div>
			</div>
		    <div class="psd-box psd-split-right">
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
			
			<?php $get_random_control = $random_control[array_rand($random_control)]; ?>
			<div class="psd-row psd-row-action psd-row-movement">
			  <button class="psd-button psd-button-stand psd-button-curr content_center">
				<?php require ($_SERVER['SCOUTDB'].'img/icon/stand'.$get_random_control.'.svg')?>
			  </button>
			  <button class="psd-button psd-button-walk content_center">
				<?php require ($_SERVER['SCOUTDB'].'img/icon/walk'.$get_random_control.'.svg')?>
			  </button>
			  <button class="psd-button psd-button-run content_center">
				<?php require ($_SERVER['SCOUTDB'].'img/icon/run'.$get_random_control.'.svg')?>
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
<script defer rancak-hold="js/competition.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>