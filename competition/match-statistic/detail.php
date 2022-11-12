<?php 
  $page='dashboard';
  $menu='min';
  $channel='competition';
  $subchannel='match-statistic';
  $report='no';
  $report_link='';
  $report_label='';
  $backto_link='competition/match/'; $backto_label='player';
  require ('../../inc/base.php')
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

          <div class="psd-center-split">
		    <div class="psd-box psd-split-left psd-switch psd-switch-home">
			  <?php $scout_button='plusminus'; $scout_label='goal'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			  <?php $scout_button='plusminus'; $scout_label='asst'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			  <?php $scout_button='plusminus'; $scout_label='offs'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			  <?php $scout_button='card'; $scout_label='card'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			  <?php $scout_button='plusminus'; $scout_label='subs'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			</div>
		    <div class="psd-box psd-split-center psd-split-line">
			  <div class="psd-sl-box content_center">
			    <div></div>
			  </div>
			  <div class="psd-row">
			    <div class="psd-row-misc content_center">
				  <img alt="img_title" class="lazyload" data-original="img/logo.png">
				</div>
			  </div>
			</div>
		    <div class="psd-box psd-split-right psd-switch psd-switch-away">
			  <?php $scout_button='plusminus'; $scout_label='goal'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			  <?php $scout_button='plusminus'; $scout_label='asst'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			  <?php $scout_button='plusminus'; $scout_label='offs'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			  <?php $scout_button='card'; $scout_label='card'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			  <?php $scout_button='plusminus'; $scout_label='subs'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			</div>
			
			<!-- border -->
		    <div class="psd-box psd-split-left">
              <div class="psd-row psd-row-action psd-row-single">
                <button class="psd-button content_center">
                  Undo
                </button>
              </div>
			</div>
		    <div class="psd-box psd-split-center">
              <div class="psd-row psd-row-action psd-row-single">
                <button class="psd-button psd-button-start content_center">
                  Start Match
                </button>
              </div>
			</div>
		    <div class="psd-box psd-split-right">
              <div class="psd-row psd-row-action psd-row-single">
                <button class="psd-button psd-button-end content_center">
                  End Match
                </button>
              </div>
			</div>
		  </div>
		</div>
		
		
		
		<div class="psd-container-left psd-switch psd-switch-home">
          <div class="psd-box">
			<?php $scout_button='default'; $scout_label='frek'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='default'; $scout_label='thrw'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
            <?php $scout_button='default'; $scout_label='corn'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
            <?php $scout_button='default'; $scout_label='pena'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
            <?php $scout_button='default'; $scout_label='shot'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
            <?php $scout_button='default'; $scout_label='pass'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
            <div class="psd-row psd-row-action psd-row-single psd-ball-possession">
              <button data-active="home" class="psd-button content_center">
			    <div class="psd-ball-stat">(00%)</div>
                Ball Possession 
              </button>
            </div>
          </div>
		</div>
		
		
		
		<div class="psd-container-right psd-switch psd-switch-away">
          <div class="psd-box">
			<?php $scout_button='default'; $scout_label='frek'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
			<?php $scout_button='default'; $scout_label='thrw'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
            <?php $scout_button='default'; $scout_label='corn'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
            <?php $scout_button='default'; $scout_label='pena'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
            <?php $scout_button='default'; $scout_label='shot'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
            <?php $scout_button='default'; $scout_label='pass'; require ($_SERVER['SCOUTDB'].'module/scout-button.php')?>
            <div class="psd-row psd-row-action psd-row-single psd-ball-possession">
              <button data-active="away" class="psd-button content_center">
			    <div class="psd-ball-stat">(00%)</div>
                Ball Possession 
              </button>
            </div>
          </div>
		</div>
	  </div>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/competition.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>