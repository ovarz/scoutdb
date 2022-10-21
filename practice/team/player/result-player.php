<?php 
  $page='dashboard';
  $menu='full';
  $channel='practice';
  $report='no';
  $report_link='';
  $report_label='';
  $backto_link='practice/team/player/'; $backto_label='Player';
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<link rel="stylesheet" type="text/css" href="css/practice.css?<?php echo $anticache; ?>"/>
<div class="rancak-container">
  <span class="width-max">

    <section aria-label="Breadcrumb" class="breadcrumb">
      <a aria-label="Home" title="Home" class="breadcrumb-link content_center" href="home.php">
        <?php require ($_SERVER['SCOUTDB'].'img/icon/home.svg')?>
      </a>
      <a aria-label="Practice" title="Practice" class="breadcrumb-link content_center" href="practice/">
        <span>Practice</span>
      </a>
      <a aria-label="Team Full Name FC" title="Team Full Name FC" class="breadcrumb-link content_center" href="practice/team/">
        <span>Team_Full_Name FC</span>
      </a>
      <a aria-label="Player_Full_Name" title="Player_Full_Name" class="breadcrumb-link content_center" href="practice/team/player/">
        <span>Player_Full_Name</span>
      </a>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <h2 class="section-title">
	    <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/menu-practice.svg')?></div>
	    <div class="section-title-label"><?php echo $random_username[array_rand($random_username)]; ?> - Practice Report</div>
		<div class="pagination report-player-pagination">
		  <a aria-label="Previous Page" title="Previous Page" class="pagination-button content_center" href="javascript:void(0)">
			<?php require ($_SERVER['SCOUTDB'].'img/icon/left.svg')?>
		  </a>
		  <a aria-label="Next Page" title="Next Page" class="pagination-button content_center" href="javascript:void(0)">
			<?php require ($_SERVER['SCOUTDB'].'img/icon/right.svg')?>
		  </a>
		</div>
	  </h2>
      <div class="report-player-practice">
	    <div class="rpp-row rpp-head">
		  <div class="rpp-column rpp-type">Practice Type</div>
		  <?php for ($i=1; $i <= 3 ; $i++) { ?>
		  <div class="rpp-column rpp-detail">
		    <div class="rpp-day">Sat</div>
		    <div class="rpp-date">00 Oct</div>
		  </div>
		  <?php } ?>
		  <div class="rpp-column rpp-detail rpp-today">
		    <div class="rpp-day">Sat</div>
		    <div class="rpp-date">00 Oct</div>
		  </div>
		  <?php for ($i=1; $i <= 3 ; $i++) { ?>
		  <div class="rpp-column rpp-detail">
		    <div class="rpp-day">Sat</div>
		    <div class="rpp-date">00 Oct</div>
		  </div>
		  <?php } ?>
		</div>
		<?php for ($i=1; $i <= 10 ; $i++) { ?>
          <div class="rpp-row">
            <div class="rpp-column rpp-type">Practice AA</div>
            <?php $random_practice_table=array("empty","empty","contain"); for ($j=1; $j <= 7 ; $j++) { ?>
              <?php $practice_table=$random_practice_table[array_rand($random_practice_table)]; 
              require ($_SERVER['SCOUTDB'].'module/training-result-table.php')?>
            <?php } ?>
          </div>
		<?php } ?>
      </div>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/practice.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>