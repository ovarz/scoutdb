<?php 
  $page='dashboard';
  $menu='full';
  $channel='video-player';
  $backto_link='home.php'; $backto_label='Home';
  require ('../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<link rel="stylesheet" type="text/css" href="css/calendar.css"/>
<link rel="stylesheet" type="text/css" href="css/video-player.css"/>
<div class="rancak-container">
  <span class="width-max">

    <section aria-label="Breadcrumb" class="breadcrumb">
      <a aria-label="Home" title="Home" class="breadcrumb-link content_center" href="home.php">
        <?php require ($_SERVER['SCOUTDB'].'img/icon/home.svg')?>
      </a>
      <div class="breadcrumb-link content_center">
        <span>Video Player</span>
      </div>
    </section>



    <section aria-label="Daftar Statistik" class="videoplayer-list">
      <div class="video-filter">
        <h2 class="section-title video-filter-label">
	      <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/section-title.svg')?></div>
	      <div class="section-title-label">Video List</div>
		</h2>
        <div class="video-filter-container">
          <div class="video-filter-sort">
            <select class="video-filter-field">
              <option value="1">Newest</option>
              <option value="2">Oldest</option>
            </select>
            <div class="video-filter-dropdown content_center">
              <?php require ($_SERVER['SCOUTDB'].'img/icon/dropdown.svg')?>
            </div>
          </div>
          <div class="video-filter-search">
            <input class="video-filter-field" placeholder="Input keyword......" type="text">
            <button title="Cari" class="video-filter-button content_center">
              <?php require ($_SERVER['SCOUTDB'].'img/icon/search.svg')?>
            </button>
          </div>
          <div class="video-filter-date" id="pilihtanggal">
            <input class="video-filter-field choosedate" placeholder="Choose date......" type="text">
            <button title="Cari" class="video-filter-button content_center">
              <?php require ($_SERVER['SCOUTDB'].'img/icon/calendar.svg')?>
            </button>
          </div>
        </div>
      </div>
	  
	  <div class="videoplayer-list-container">
	    <?php for ($i=1; $i <= 10 ; $i++) { ?>
        <a aria-label="IMG_TITLE" title="IMG_TITLE" class="vlc-row" href="video-player/detail.php">
          <div class="vlc-thumb">
            <div class="vlc-thumb-frame flex_ori thumb-loading">
              <img alt="img_title" class="lazyload" data-original="img/sample/content-<?php echo rand(1,20); ?>.jpg" />
              <div class="vlc-thumb-icon content_center">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/play-circle.svg')?>
              </div>
            </div>
          </div>
          <?php require ($_SERVER['SCOUTDB'].'module/video-player-info.php')?>
          <?php require ($_SERVER['SCOUTDB'].'module/video-player-match.php')?>
        </a>
		<?php } ?>
	  </div>
	  
	  <?php require ($_SERVER['SCOUTDB'].'module/pagination.php')?>
    </section>
    
  </span>
</div>
<script defer rancak-hold="js/calendar.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>