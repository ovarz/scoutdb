<div class="vlc-row">
  <a aria-label="IMG_TITLE" title="IMG_TITLE" class="vlc-thumb" href="scout-video/detail.php">
	<div class="vlc-thumb-frame flex_ori thumb-loading">
	  <img alt="img_title" class="lazyload" data-original="img/sample/content-<?php echo rand(1,20); ?>.jpg" />
	  <div class="vlc-thumb-icon content_center">
	    <?php require ($_SERVER['SCOUTDB'].'img/icon/play-circle.svg')?>
	  </div>
	</div>
  </a>
  <a aria-label="IMG_TITLE" title="IMG_TITLE" class="vlc-link" href="scout-video/detail.php">
    <span>
      <div class="vlc-id">#000000</div>
      <div class="vlc-name">ScoutDB Competition Name</div>
      <div class="vlc-date">00/00/0000 00:00</div>
	</span>
  </a>
  <a aria-label="IMG_TITLE" title="IMG_TITLE" class="vlc-link" href="scout-video/detail.php">
    <span>
      <div class="vlc-team">
        <?php echo $random_username[array_rand($random_username)]; ?> VS
        <?php echo $random_username[array_rand($random_username)]; ?>
      </div>
      <div class="vlc-round">Babak I</div>
	</span>
  </a>
  <div class="vlc-action">
    <span>
      <button title="Upload Video" class="vlc-button vlc-button-upload open-float content_center">
        <?php require ($_SERVER['SCOUTDB'].'img/icon/upload.svg')?>
      </button>
      <button title="Delete Video" class="vlc-button vlc-button-delete open-float content_center">
        <?php require ($_SERVER['SCOUTDB'].'img/icon/delete.svg')?>
      </button>
	</span>
  </div>
</div>