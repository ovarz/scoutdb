<?php 
  $page='dashboard';
  $menu='full';
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
<?php require ($_SERVER['SCOUTDB'].'inc/menu-competition.php')?>
<link rel="stylesheet" type="text/css" href="css/competition.css?<?php echo $anticache; ?>"/>
<div class="rancak-container">
  <span class="width-max">

    <section aria-label="Section Competition" class="section-container">
	  <h2 class="section-title">
        <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/menu-competition.svg')?></div>
        <div class="section-title-label">Match Information</div>
	  </h2>
      <div class="match-info">
        <div class="match-info-row">
		  <div class="match-info-label">Field</div>
		  <div class="match-info-box match-info-choice">
		  
		    <div class="match-info-radiobutton">
			  <input type="radio" class="mirb-real" name="field">
			  <div class="mirb-dummy">
			    <div class="mirb-icon content_center"><?php require ($_SERVER['SCOUTDB'].'img/icon/field-dry.svg')?></div>
			    <div class="mirb-label">Dry</div>
			  </div>
			</div>
		  
		    <div class="match-info-radiobutton">
			  <input type="radio" class="mirb-real" name="field">
			  <div class="mirb-dummy">
			    <div class="mirb-icon content_center"><?php require ($_SERVER['SCOUTDB'].'img/icon/field-wet.svg')?></div>
			    <div class="mirb-label">Wet</div>
			  </div>
			</div>
		  
		    <div class="match-info-radiobutton">
			  <input type="radio" class="mirb-real" name="field">
			  <div class="mirb-dummy">
			    <div class="mirb-icon content_center"><?php require ($_SERVER['SCOUTDB'].'img/icon/field-mud.svg')?></div>
			    <div class="mirb-label">Mud</div>
			  </div>
			</div>
			
		  </div>
		</div>
		  
		  
		  
        <div class="match-info-row">
		  <div class="match-info-label">Weather</div>
		  <div class="match-info-box match-info-choice">
		  
		    <div class="match-info-radiobutton">
			  <input type="radio" class="mirb-real" name="weather">
			  <div class="mirb-dummy">
			    <div class="mirb-icon content_center"><?php require ($_SERVER['SCOUTDB'].'img/icon/weather-bright.svg')?></div>
			    <div class="mirb-label">Bright</div>
			  </div>
			</div>
		  
		    <div class="match-info-radiobutton">
			  <input type="radio" class="mirb-real" name="weather">
			  <div class="mirb-dummy">
			    <div class="mirb-icon content_center"><?php require ($_SERVER['SCOUTDB'].'img/icon/weather-hot.svg')?></div>
			    <div class="mirb-label">Hot</div>
			  </div>
			</div>
		  
		    <div class="match-info-radiobutton">
			  <input type="radio" class="mirb-real" name="weather">
			  <div class="mirb-dummy">
			    <div class="mirb-icon content_center"><?php require ($_SERVER['SCOUTDB'].'img/icon/weather-rain.svg')?></div>
			    <div class="mirb-label">Rain</div>
			  </div>
			</div>
		  
		    <div class="match-info-radiobutton">
			  <input type="radio" class="mirb-real" name="weather">
			  <div class="mirb-dummy">
			    <div class="mirb-icon content_center"><?php require ($_SERVER['SCOUTDB'].'img/icon/weather-heavyrain.svg')?></div>
			    <div class="mirb-label">Heavy Rain</div>
			  </div>
			</div>
			
		  </div>
		</div>
		
		
		
        <div class="match-info-row">
		  <div class="match-info-label">Referee 1</div>
		  <div class="match-info-box">
		    <input class="match-info-field" placeholder="Insert full name......" type="text">
		  </div>
		</div>
		
		
		
        <div class="match-info-row">
		  <div class="match-info-label">Referee 2</div>
		  <div class="match-info-box">
		    <input class="match-info-field" placeholder="Insert full name......" type="text">
		  </div>
		</div>
		
		
		
        <div class="match-info-row">
		  <div class="match-info-label">Linesman 1</div>
		  <div class="match-info-box">
		    <input class="match-info-field" placeholder="Insert full name......" type="text">
		  </div>
		</div>
		
		
		
        <div class="match-info-row">
		  <div class="match-info-label">Linesman 2</div>
		  <div class="match-info-box">
		    <input class="match-info-field" placeholder="Insert full name......" type="text">
		  </div>
		</div>
		
		
		
        <div class="match-info-row">
		  <div class="match-info-label">Home Team Jersey</div>
		  
		  <div class="clc-jersey">
		    <?php $color_display='Default'; $jersey_label='goalkeeper'; 
			$color_switch='yes'; $color_1='Yellow'; $color_2='Blue'; $color_3='Black'; 
			require ($_SERVER['SCOUTDB'].'module/jersey-color.php')?>
		    <?php $color_display='Default'; $jersey_label='player'; 
			$color_switch='yes'; $color_1='Red'; $color_2='White'; $color_3='Orange'; 
			require ($_SERVER['SCOUTDB'].'module/jersey-color.php')?>
		  </div>
		</div>
		
		
		
        <div class="match-info-row">
		  <div class="match-info-label">Away Team Jersey</div>
		  
		  <div class="clc-jersey">
		    <?php $color_display='Default'; $jersey_label='goalkeeper'; 
			$color_switch='yes'; $color_1='Black'; $color_2='Green'; $color_3='Silver'; 
			require ($_SERVER['SCOUTDB'].'module/jersey-color.php')?>
		    <?php $color_display='Default'; $jersey_label='player'; 
			$color_switch='yes'; $color_1='White'; $color_2='Green'; $color_3='Pink'; 
			require ($_SERVER['SCOUTDB'].'module/jersey-color.php')?>
		  </div>
		</div>
		
		
		
        <div class="match-info-row match-info-submit">
		  <button class="btn content_center" onclick="location.href='competition/in-game-administration/info/lineup-full.php';">
            Save Data
          </button>
		</div>
      </div>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/competition.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>