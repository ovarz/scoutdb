<?php 
  $page='dashboard';
  $menu='full';
  $channel='practice';
  $practice_type='timer-point';
  $backto_link='practice/team/player/'.$practice_type.'/'; $backto_label=$practice_type;
  require ('../../../../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php $practice_result='practice'; require ($_SERVER['SCOUTDB'].'inc/header.php')?>
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
      <a aria-label="Timer & Point" title="Timer & Point" class="breadcrumb-link content_center" 
	  href="practice/team/player/<?php echo $practice_type; ?>/">
        <span>Timer & Point</span>
      </a>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <h2 class="section-title">
	    <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/menu-practice.svg')?></div>
	    <div class="section-title-label">Timer & Point - Practice Report</div>
		<div class="practice-result-search">
		  <input class="search-field" name="" type="text" placeholder="Search by player name.....">
		  <button title="Search" class="search-button">
		    <?php require ($_SERVER['SCOUTDB'].'img/icon/search.svg')?>
		  </button>
		</div>
	  </h2>
      <div class="report-practice-list">
	    <?php for ($i=1; $i <= 20 ; $i++) { ?>
          <?php require ($_SERVER['SCOUTDB'].'module/training-result-bytype.php')?>
		<?php } ?>
      </div>
	  <?php require ($_SERVER['SCOUTDB'].'module/pagination.php')?>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/practice.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>