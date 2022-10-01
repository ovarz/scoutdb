<?php 
  $page='dashboard';
  $menu='full';
  $channel='practice';
  $backto_link='practice/team/player/speed/'; $backto_label='Speed';
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
      <a aria-label="Speed" title="Speed" class="breadcrumb-link content_center" href="practice/team/player/speed/">
        <span>Speed</span>
      </a>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <h2 class="section-title">
	    <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/section-title.svg')?></div>
	    <div class="section-title-label">Speed - Practice Report</div>
		<div class="practice-result-search">
		  <input class="search-field" name="" type="text" placeholder="Search by player name.....">
		  <button title="Search" class="search-button">
		    <?php require ($_SERVER['SCOUTDB'].'img/icon/search.svg')?>
		  </button>
		</div>
	  </h2>
      <div class="report-practice-list">
	    <?php for ($i=1; $i <= 20 ; $i++) { ?>
	    <div class="rpl-box">
		  <div class="rpl-photo">
		    <div class="rpl-frame flex_ori thumb-loading">
			  <img alt="img_title" class="lazyload" data-original="img/sample/player-<?php echo rand(1,20); ?>.jpg" />
			</div>
		  </div>
		  <div class="rpl-info">
		    <span>
			  <div class="rpl-name"><?php echo $random_username[array_rand($random_username)]; ?></div>
			  <div class="rpl-rating rating-icon">
				<?php $training_rating_total=rand(1,5); for ($training_rating=1; $training_rating <= $training_rating_total ; $training_rating++) { ?>
				  <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
				<?php } ?>
				<?php for ($training_rating=1; $training_rating <= 5 - $training_rating_total ; $training_rating++) { ?>
				  <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
				<?php } ?>
			  </div>
			  <div class="rpl-date">Last update : 00 Sep 0000 - 00:00</div>
			</span>
		  </div>
		</div>
		<?php } ?>
	    <?php require ($_SERVER['SCOUTDB'].'module/pagination.php')?>
      </div>
    </section>
	
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>