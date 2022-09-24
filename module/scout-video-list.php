<div class="vlc-row">
  <a aria-label="IMG_TITLE" title="IMG_TITLE" class="vlc-thumb" href="scout-video/detail.php">
	<div class="vlc-thumb-frame flex_ori thumb-loading">
	  <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
	</div>
  </a>
  <a aria-label="IMG_TITLE" title="IMG_TITLE" class="vlc-link" href="scout-video/detail.php">
	<div class="vlc-id">#000000</div>
	<div class="vlc-name">ScoutDB Competition Name</div>
	<div class="vlc-date">00/00/0000 00:00</div>
  </a>
  <a aria-label="IMG_TITLE" title="IMG_TITLE" class="vlc-link" href="scout-video/detail.php">
	<div class="vlc-team">
	  Team <?php echo $random_username[array_rand($random_username)]; ?> VS
	  Team <?php echo $random_username[array_rand($random_username)]; ?>
	</div>
	<div class="vlc-round">Babak I</div>
  </a>
  <div class="vlc-action">
    <button title="Notification" class="vlc-button vlc-button-upload open-float content_center">
      <?php require ($_SERVER['SCOUTDB'].'img/icon/notification.svg')?>
    </button>
    <button title="Notification" class="vlc-button vlc-button-delete open-float content_center">
      <?php require ($_SERVER['SCOUTDB'].'img/icon/notification.svg')?>
    </button>
  </div>
</div>