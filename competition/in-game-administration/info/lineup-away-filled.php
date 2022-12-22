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
        <div class="section-title-label">Away Team Name Lineup</div>
	  </h2>
		
	  <div class="input-lineup">
	    <input class="input-lineup-field" id="player_name" placeholder="Masukkan Nama Pemain....." type="text">
	  </div>
	  
	  <div class="player-mini-list">
	    <div class="pml-container">
		  <div class="pml-title">Starting Lineup</div>
		  <div class="pml-column">
		    <?php for ($i=1; $i <= 11 ; $i++) { ?>
			  <?php require ($_SERVER['SCOUTDB'].'module/player-card-mini.php')?>
			<?php } ?>
		  </div>
		</div>
		
	    <div class="pml-container">
		  <div class="pml-title">Substitution</div>
		  <div class="pml-column">
		    <?php for ($i=1; $i <= 15 ; $i++) { ?>
			  <?php require ($_SERVER['SCOUTDB'].'module/player-card-mini.php')?>
			<?php } ?>
		  </div>
		</div>
		
	    <div class="pml-container">
		  <div class="pml-title">Reserved</div>
		  <div class="pml-column">
		    <?php for ($i=1; $i <= 6 ; $i++) { ?>
			  <?php require ($_SERVER['SCOUTDB'].'module/player-card-mini.php')?>
			<?php } ?>
		  </div>
		</div>
	  </div>
	  
		
      <div class="match-info-row match-info-submit">
        <button class="btn content_center" onclick="location.href='competition/in-game-administration/info/lineup-full.php';">
          Save Data
        </button>
      </div>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/autocomplete-base.js"></script>
<script defer rancak-hold="js/autocomplete-player.js"></script>
<script defer rancak-hold="js/competition.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>