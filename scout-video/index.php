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
      <a aria-label="Home" title="Home" class="breadcrumb-link header-home content_center" href="home.php">
        <?php require ($_SERVER['SCOUTDB'].'img/icon/home.svg')?>
      </a>
      <div class="breadcrumb-link header-home content_center">
        <span>Scout By Video</span>
      </div>
    </section>



    <section aria-label="Daftar Statistik" class="videoscout-list">
      <div class="video-filter">
        <h2 class="section-title video-filter-label">Scout By Video</h2>
        <div class="video-filter-container">
          <div class="video-filter-sort">
            <select class="video-filter-field">
              <option value="1">Terbaru</option>
              <option value="2">Terlama</option>
            </select>
            <div class="video-filter-dropdown content_center">
              <?php require ($_SERVER['SCOUTDB'].'img/icon/dropdown.svg')?>
            </div>
          </div>
          <div class="video-filter-search">
            <input class="video-filter-field" placeholder="Masukan kata kunci......" type="text">
            <button title="Cari" class="video-filter-button content_center">
              <?php require ($_SERVER['SCOUTDB'].'img/icon/search.svg')?>
            </button>
          </div>
        </div>
      </div>
	  
	  <div class="videoscout-list-container">
	    <?php for ($i=1; $i <= 10 ; $i++) { ?>
	      <?php require ($_SERVER['SCOUTDB'].'module/scout-video-list.php')?>
		<?php } ?>
	  </div>
	  
	  <?php require ($_SERVER['SCOUTDB'].'module/pagination.php')?>
    </section>
    
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>