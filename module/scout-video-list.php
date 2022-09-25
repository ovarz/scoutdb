<a aria-label="IMG_TITLE" title="IMG_TITLE" class="vlc-row" href="scout-video/detail.php">
  <div class="vlc-thumb">
	<div class="vlc-thumb-frame flex_ori thumb-loading">
	  <img alt="img_title" class="lazyload" data-original="img/sample/content-<?php echo rand(1,20); ?>.jpg" />
	  <div class="vlc-thumb-icon content_center">
	    <?php require ($_SERVER['SCOUTDB'].'img/icon/play-circle.svg')?>
	  </div>
	</div>
  </div>
  <div class="vlc-info">
    <ul class="vlc-info-row">
      <li class="vlc-info-label">Competition Name</li>
      <li class="vlc-info-data">ScoutDB Competition 2022</li>
    </ul>
    <ul class="vlc-info-row">
      <li class="vlc-info-label">Duration</li>
      <li class="vlc-info-data">00:00:00</li>
    </ul>
    <ul class="vlc-info-row">
      <li class="vlc-info-label">Round</li>
      <li class="vlc-info-data"><?php echo rand(1,2); ?></li>
    </ul>
    <ul class="vlc-info-row">
      <li class="vlc-info-label">Player Scouted</li>
      <li class="vlc-info-data"><?php echo $random_username[array_rand($random_username)]; ?></li>
    </ul>
  </div>
  <div class="vlc-match">
    <ul class="vlc-match-row">
	  <li class="vlc-match-home">
	    <div class="vlc-match-emblem">
		  <img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(1,20); ?>.svg" />
		</div>
	  </li>
	  <li class="vlc-match-vs"></li>
	  <li class="vlc-match-away">
	    <div class="vlc-match-emblem">
		  <img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(1,20); ?>.svg" />
		</div>
	  </li>
	</ul>
    <ul class="vlc-match-row">
	  <li class="vlc-match-home">
	    <div class="vlc-match-name"><?php echo $random_username[array_rand($random_username)]; ?></div>
	  </li>
	  <li class="vlc-match-vs">VS</li>
	  <li class="vlc-match-away">
	    <div class="vlc-match-name"><?php echo $random_username[array_rand($random_username)]; ?></div>
	  </li>
	</ul>
    <ul class="vlc-match-row vlc-match-score">
	  <li class="vlc-match-home">
	    <div class="vlc-match-scorenumber"><?php echo rand(1,3); ?></div>
	  </li>
	  <li class="vlc-match-vs"></li>
	  <li class="vlc-match-away">
	    <div class="vlc-match-scorenumber"><?php echo rand(1,5); ?></div>
	  </li>
	</ul>
  </div>
</a>