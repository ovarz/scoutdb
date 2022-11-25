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
	    <div class="choose-lineup-column choose-lineup-home">
		  <div class="clc-team">
		    <div class="clc-team-name"><b>Team Home</b></div>
		    <div class="clc-team-emblem">
			  <img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(1,10); ?>.svg" />
			</div>
		  </div>
		  
		  <div class="clc-jersey">
		    <div class="clc-jersey-container clc-jersey-goalkeeper" data-color="Default">
			  <div class="clc-jersey-label">Goalkeeper</div>
			  <div class="clc-jersey-preview content_center">
			    <?php require ($_SERVER['SCOUTDB'].'img/icon/jersey.svg')?>
			  </div>
			  <div class="clc-jersey-choice">
			    <button title="Jersey" data-color="Yellow" class="clc-jersey-button"></button>
			    <button title="Jersey" data-color="Blue" class="clc-jersey-button"></button>
			    <button title="Jersey" data-color="Black" class="clc-jersey-button"></button>
			  </div>
			</div>
		    <div class="clc-jersey-container clc-jersey-player" data-color="Default">
			  <div class="clc-jersey-label">Player</div>
			  <div class="clc-jersey-preview">
			    <?php require ($_SERVER['SCOUTDB'].'img/icon/jersey.svg')?>
			  </div>
			  <div class="clc-jersey-choice">
			    <button title="Jersey" data-color="Red" class="clc-jersey-button"></button>
			    <button title="Jersey" data-color="White" class="clc-jersey-button"></button>
			    <button title="Jersey" data-color="Orange" class="clc-jersey-button"></button>
			  </div>
			</div>
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
                <?php $clc_mode='form'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		  
		  <div class="clc-player">
		    <div class="clc-player-label">Reserved</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 5 ; $i++) { ?>
                <?php $clc_mode='form'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
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
		    <div class="clc-jersey-container clc-jersey-goalkeeper" data-color="Default">
			  <div class="clc-jersey-label">Goalkeeper</div>
			  <div class="clc-jersey-preview content_center">
			    <?php require ($_SERVER['SCOUTDB'].'img/icon/jersey.svg')?>
			  </div>
			  <div class="clc-jersey-choice">
			    <button title="Jersey" data-color="Black" class="clc-jersey-button"></button>
			    <button title="Jersey" data-color="Green" class="clc-jersey-button"></button>
			    <button title="Jersey" data-color="Silver" class="clc-jersey-button"></button>
			  </div>
			</div>
		    <div class="clc-jersey-container clc-jersey-player" data-color="Default">
			  <div class="clc-jersey-label">Player</div>
			  <div class="clc-jersey-preview">
			    <?php require ($_SERVER['SCOUTDB'].'img/icon/jersey.svg')?>
			  </div>
			  <div class="clc-jersey-choice">
			    <button title="Jersey" data-color="White" class="clc-jersey-button"></button>
			    <button title="Jersey" data-color="Green" class="clc-jersey-button"></button>
			    <button title="Jersey" data-color="Pink" class="clc-jersey-button"></button>
			  </div>
			</div>
		  </div>
		  
		  <div class="clc-player">
		    <div class="clc-player-label">Starting Lineup</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 3 ; $i++) { ?>
                <?php $clc_mode='box'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
              <?php for ($i=1; $i <= 8 ; $i++) { ?>
                <?php $clc_mode='form'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		  
		  <div class="clc-player">
		    <div class="clc-player-label">Subtitution</div>
            <div class="clc-player-list">
              <?php for ($i=1; $i <= 11 ; $i++) { ?>
                <?php $clc_mode='form'; require ($_SERVER['SCOUTDB'].'module/lineup-box.php')?>
              <?php } ?>
            </div>
		  </div>
		  
		  <div class="clc-player">
		    <div class="clc-player-label">Reserved</div>
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