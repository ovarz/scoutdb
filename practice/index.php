<?php 
  $page='dashboard';
  $channel='practice';
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
      <div class="breadcrumb-link content_center">
        <span>Practice</span>
      </div>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <div class="section-title">
	    <div class="section-title-label">Practice</div>
	  </div>
    </section>
	
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>