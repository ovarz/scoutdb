<?php 
  $page='dashboard';
  $menu='full';
  $channel='practice';
  $report='yes';
  $report_link='practice/report.php';
  $report_label='Report';
  $backto_link='practice/'; $backto_label='Practice';
  require ('../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<div class="rancak-container">
  <span class="width-max">

    <section aria-label="Breadcrumb" class="breadcrumb">
      <a aria-label="Home" title="Home" class="breadcrumb-link content_center" href="home.php">
        <?php require ($_SERVER['SCOUTDB'].'img/icon/home.svg')?>
      </a>
      <a aria-label="Practice" title="Practice" class="breadcrumb-link content_center" href="practice/">
        <span>Practice</span>
      </a>
      <div class="breadcrumb-link content_center">
        <span>Report</span>
      </div>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <div class="table-filter">
        <h2 class="section-title table-filter-label">
	      <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/menu-practice.svg')?></div>
	      <div class="section-title-label">Choose Your Player</div>
		</h2>
        <div class="table-filter-container">
          <div class="table-filter-sort">
            <select class="table-filter-field">
              <option value="1">- All Team -</option>
              <option value="2">Team A</option>
              <option value="3">Team B</option>
              <option value="4">Team C</option>
            </select>
            <div class="table-filter-dropdown content_center">
              <?php require ($_SERVER['SCOUTDB'].'img/icon/dropdown.svg')?>
            </div>
          </div>
          <div class="table-filter-search">
            <input class="table-filter-field" placeholder="Input player name......" type="text">
            <button title="Cari" class="table-filter-button content_center">
              <?php require ($_SERVER['SCOUTDB'].'img/icon/search.svg')?>
            </button>
          </div>
        </div>
      </div>
      <div class="player-list">
        <?php for ($i=1; $i <= 20 ; $i++) { ?>
          <?php $player_link='practice/team/player/result-player.php'; require ($_SERVER['SCOUTDB'].'module/player-list.php')?>
        <?php } ?>
      </div>
    </section>
	
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>