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
        <div class="section-title-label">Line Up Confirmation</div>
	  </h2>
      <div class="choose-lineup">
	    <div class="choose-lineup-column choose-lineup-home">
		  <div class="clc-team">
		    <div class="clc-team-name"><b>Team Home</b></div>
		    <div class="clc-team-emblem">
			  <img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(1,10); ?>.svg" />
			</div>
		  </div>
		  
		  <div class="clc-jersey">
		    <?php $color_display='Yellow'; $jersey_label='goalkeeper'; 
			$color_switch='no'; $color_1=''; $color_2=''; $color_3=''; 
			require ($_SERVER['SCOUTDB'].'module/jersey-color.php')?>
		    <?php $color_display='Red'; $jersey_label='player'; 
			$color_switch='no'; $color_1=''; $color_2=''; $color_3=''; 
			require ($_SERVER['SCOUTDB'].'module/jersey-color.php')?>
		  </div>
		  
		  <div class="clc-player">
		    <div class="clc-player-label">Starting Lineup</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 11 ; $i++) { ?>
                <?php $clc_mode='box'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		  
		  <div class="clc-player">
		    <div class="clc-player-label">Subtitution</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 11 ; $i++) { ?>
                <?php $clc_mode='box'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		  
		  <div class="clc-player">
		    <div class="clc-player-label">Reserved</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 5 ; $i++) { ?>
                <?php $clc_mode='box'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		</div>
		
		
		
		
		
	    <div class="choose-lineup-column choose-lineup-away">
		  <div class="clc-team">
		    <div class="clc-team-emblem">
			  <img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(11,20); ?>.svg" />
			</div>
		    <div class="clc-team-name"><b>Team Away</b></div>
		  </div>
		  
		  <div class="clc-jersey">
		    <?php $color_display='Green'; $jersey_label='goalkeeper'; 
			$color_switch='no'; $color_1=''; $color_2=''; $color_3=''; 
			require ($_SERVER['SCOUTDB'].'module/jersey-color.php')?>
		    <?php $color_display='White'; $jersey_label='player'; 
			$color_switch='no'; $color_1=''; $color_2=''; $color_3=''; 
			require ($_SERVER['SCOUTDB'].'module/jersey-color.php')?>
		  </div>
		  
		  <div class="clc-player">
		    <div class="clc-player-label">Starting Lineup</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 11 ; $i++) { ?>
                <?php $clc_mode='box'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		  
		  <div class="clc-player">
		    <div class="clc-player-label">Subtitution</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 11 ; $i++) { ?>
                <?php $clc_mode='box'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		  
		  <div class="clc-player">
		    <div class="clc-player-label">Reserved</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 5 ; $i++) { ?>
                <?php $clc_mode='box'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
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



<div id="popup-EditPlayerNumber" class="rancak-popup hide">
  <div class="rancak-popup-overlay"></div>
  <button title="Close" class="popup-close-button rancak-popup-close content_center">
    <?php require ($_SERVER['SCOUTDB'].'img/icon/close.svg')?>
  </button>
  <div class="rancak-popup-container content_center">
	<div class="rancak-popup-box popup-v20">
	  <div class="popup-v20-label">Input New Shirt Number</div>
	  <input type="text" class="popup-v20-field" placeholder="<?php echo rand(1,30); ?>"
	  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"/>
	  <div class="popup-v20-action">
		<button title="No" class="btn popup-close-button popup-v20-cancel">Cancel</button>
		<button title="Yes" class="btn popup-v20-save" onclick="location.href='competition/in-game-administration/info/lineup-full.php';">Save</button>
	  </div>
	</div>
  </div>
</div>



<div id="popup-InsertPlayer" class="rancak-popup hide">
  <div class="rancak-popup-overlay"></div>
  <button title="Close" class="popup-close-button rancak-popup-close content_center">
    <?php require ($_SERVER['SCOUTDB'].'img/icon/close.svg')?>
  </button>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box popup-insert-player">
	  <div class="pip-label">Choose Player</div>
	  <div class="pip-list">
		<?php for ($i=1; $i <= 15 ; $i++) { ?>
		  <?php require ($_SERVER['SCOUTDB'].'module/player-card-small.php')?>
		<?php } ?>
	  </div>
	</div>
  </div>
</div>



<script defer rancak-hold="js/autocomplete-base.js"></script>
<script defer rancak-hold="js/autocomplete-player.js"></script>
<script defer rancak-hold="js/competition.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>