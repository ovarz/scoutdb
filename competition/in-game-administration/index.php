<?php 
  $page='dashboard';
  $menu='full';
  $channel='competition';
  $subchannel='in-game-administration';
  $report='no';
  $report_link='';
  $report_label='';
  $backto_link='competition/in-game-administration/'; $backto_label='In Game Administration';
  require ('../../inc/base.php')
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
      <div class="table-filter">
        <h2 class="section-title table-filter-label">
	      <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/menu-competition.svg')?></div>
	      <div class="section-title-label">Choose Match</div>
		</h2>
        <div class="table-filter-container">
          <div class="table-filter-sort">
            <select class="table-filter-field">
              <option value="1">- All Competition -</option>
              <option value="2">Competition A</option>
              <option value="2">Competition B</option>
              <option value="2">Competition C</option>
            </select>
            <div class="table-filter-dropdown content_center">
              <?php require ($_SERVER['SCOUTDB'].'img/icon/dropdown.svg')?>
            </div>
          </div>
          <div class="table-filter-sort">
            <select class="table-filter-field">
              <option value="1">- All Stage -</option>
              <option value="2">Group</option>
              <option value="3">Round 32</option>
              <option value="4">Round 16</option>
              <option value="5">Round 8</option>
              <option value="6">Quarter Final</option>
              <option value="7">Semi Final</option>
              <option value="8">Final</option>
            </select>
            <div class="table-filter-dropdown content_center">
              <?php require ($_SERVER['SCOUTDB'].'img/icon/dropdown.svg')?>
            </div>
          </div>
		  <div class="table-filter-sort">
		    <button class="btn table-filter-submit content_center">
			  <span>Filter</span>
			</button>
		  </div>
        </div>
      </div>
      <div class="match-list">
        <?php for ($i=1; $i <= 6 ; $i++) { ?>
		  <div class="match-link">
            <?php $channel_origin='competition'; $next_link='competition/in-game-administration/info/'; 
			require ($_SERVER['SCOUTDB'].'module/video-player-match.php')?>
		  </div>
        <?php } ?>
      </div>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/competition.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>