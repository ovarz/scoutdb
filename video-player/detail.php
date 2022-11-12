<?php 
  $page='dashboard';
  $menu='min';
  $channel='video-player';
  $report='no';
  $report_link='';
  $report_label='';
  $backto_link='video-player/'; $backto_label='Video Player';
  require ('../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<link rel="stylesheet" type="text/css" href="css/video-player.css"/>
<div class="rancak-container videoplayer-detail">
    
  <div class="videoplayer-left">	
    <section aria-label="Info Statistik" class="videoplayer-info">
      <div class="breadcrumb">
        <a aria-label="Home" title="Home" class="breadcrumb-link content_center" href="home.php">
          <?php require ($_SERVER['SCOUTDB'].'img/icon/home.svg')?>
        </a>
        <a aria-label="Home" title="Home" class="breadcrumb-link content_center" href="video-player/">
          Video Player
        </a>
      </div>
      <?php $channel_origin='video-player'; $next_link=''; 
	  require ($_SERVER['SCOUTDB'].'module/video-player-match.php')?>
      <?php require ($_SERVER['SCOUTDB'].'module/video-player-info.php')?>
    </section>



    <section aria-label="Video Statistik" class="videoplayer-play flex_ori thumb-loading">
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/Z55vhg72UWs?autoplay=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
	
  </div>

 
  
  <div class="videoplayer-right">
  
    <section aria-label="Timeline Statistik" class="videoplayer-timeline">
      <div class="vlt-list">
        <?php for ($i=1; $i <= 20 ; $i++) { ?>
          <div title="00:00" class="vlt-list-row">
            <div class="vlt-list-data"><b>000:00</b></div>
            <div class="vlt-list-info">
			  <a aria-label="<?php echo $random_username[array_rand($random_username)]; ?>" 
			  title="<?php echo $random_username[array_rand($random_username)]; ?>" class="vlt-list-player" href="home.php">
			    <?php echo $random_username[array_rand($random_username)]; ?>
			  </a>
			  <div class="vlt-list-desc"><?php echo $random_keyword[array_rand($random_keyword)]; ?></div>
			</div>
          </div>
        <?php } ?>
      </div>
    </section>
	
  </div>
  
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>