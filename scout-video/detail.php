<?php 
  $page='dashboard';
  $channel='scout-video';
  require ('../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<style><?php require ($_SERVER['SCOUTDB'].'css/scout-video.css')?></style>
<div class="rancak-container">
  <span class="width-max">

    <section aria-label="Breadcrumb" class="breadcrumb">
      <a aria-label="Home" title="Home" class="breadcrumb-link content_center" href="home.php">
        <?php require ($_SERVER['SCOUTDB'].'img/icon/home.svg')?>
      </a>
      <a aria-label="Home" title="Home" class="breadcrumb-link content_center" href="scout-video/">
        Scout By Video
      </a>
      <div class="breadcrumb-link content_center">
        <span>ScoutDB Competition 2022</span>
      </div>
    </section>



    <section aria-label="Video Statistik" class="videoscout-detail">
      tes
    </section>
    
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>