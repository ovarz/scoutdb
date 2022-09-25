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
    
  </span>
</div>



<section aria-label="Video Statistik" class="videoscout-detail">
  <div class="videoscout-play">
    <iframe width="560" height="315" class="lazyload" data-original="https://www.youtube.com/embed/cJCK80fqkv0?autoplay=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  
  
  <div class="videoscout-info">
	<?php require ($_SERVER['SCOUTDB'].'module/scout-video-match.php')?>
	<?php require ($_SERVER['SCOUTDB'].'module/scout-video-info.php')?>
	<div class="vlc-timeline">
	  <?php for ($i=1; $i <= 20 ; $i++) { ?>
	    <div title="00:00" class="vlc-timeline-list">
		  <div class="vlc-timeline-data">00:00</div>
		  <div class="vlc-timeline-info"><?php echo $random_keyword[array_rand($random_keyword)]; ?></div>
		</div>
	  <?php } ?>
	</div>
  </div>
</section>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>