<?php 
  $page='dashboard';
  $channel='practice';
  require ('../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<link rel="stylesheet" type="text/css" href="css/practice.css"/>
<div class="rancak-container">
  <span class="width-max">

    <section aria-label="Breadcrumb" class="breadcrumb">
      <a aria-label="Home" title="Home" class="breadcrumb-link content_center" href="home.php">
        <?php require ($_SERVER['SCOUTDB'].'img/icon/home.svg')?>
      </a>
      <div class="breadcrumb-link content_center">
        <span>Practice</span>
      </div>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <div class="section-title">
	    <div class="section-title-label">What's for Today Practice?</div>
	  </div>
      <div class="team-list">
        <?php for ($i=1; $i <= 20 ; $i++) { ?>
        <a aria-label="TEAM_NAME" title="TEAM_NAME" class="team-link" href="practice/team/">
          <div class="team-icon flex_ori thumb-loading">
            <img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(1,20); ?>.svg" />
          </div>
          <div class="team-name">Team Name</div>
        </a>
        <?php } ?>
      </div>
    </section>
	
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>