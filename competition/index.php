<?php 
  $page='dashboard';
  $menu='full';
  $channel='competition';
  $subchannel='player-scouting';
  $report='no';
  $report_link='';
  $report_label='';
  $backto_link='home.php'; $backto_label='Home';
  require ('../inc/base.php')
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
	    <div class="section-title-label">Choose Match</div>
		<div class="section-title-filter">
		  <div class="stf-box">
		    <select class="stf-field">
              <option value="1">- All Competition -</option>
              <option value="2">Competition A</option>
              <option value="2">Competition B</option>
              <option value="2">Competition C</option>
            </select>
			<?php require ($_SERVER['SCOUTDB'].'img/icon/dropdown.svg')?>
		  </div>
		  <div class="stf-box">
		    <select class="stf-field">
              <option value="1">- All Stage -</option>
              <option value="2">Group</option>
              <option value="3">Round 32</option>
              <option value="4">Round 16</option>
              <option value="5">Round 8</option>
              <option value="6">Quarter Final</option>
              <option value="7">Semi Final</option>
              <option value="8">Final</option>
            </select>
			<?php require ($_SERVER['SCOUTDB'].'img/icon/dropdown.svg')?>
		  </div>
		  <div class="stf-box">
		    <button class="btn stf-button content_center">
			  <span>Filter</span>
			</button>
		  </div>
		</div>
	  </h2>
      <div class="match-list">
        <?php for ($i=1; $i <= 6 ; $i++) { ?>
		  <a aria-label="MATCH_A_VS_B" title="MATCH_A_VS_B" class="match-link" href="competition/match/">
            <?php $channel_origin='competition'; 
			require ($_SERVER['SCOUTDB'].'module/video-player-match.php')?>
		  </a>
        <?php } ?>
      </div>
    </section>
	
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>