<div class="vlc-match">
  <ul class="vlc-match-row">
    <li class="vlc-match-home">
      <div class="vlc-match-emblem">
        <img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(1,20); ?>.svg" />
      </div>
    </li>
    <li class="vlc-match-vs content_center">
      <b>
	    <?php if($channel_origin == 'video-player'){ ?><?php echo rand(0,5); ?><?php } ?>
	    - 
	    <?php if($channel_origin == 'video-player'){ ?><?php echo rand(0,3); ?><?php } ?>
	  </b>
    </li>
    <li class="vlc-match-away">
      <div class="vlc-match-emblem">
        <img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(1,20); ?>.svg" />
      </div>
    </li>
  </ul>
  <ul class="vlc-match-row">
    <li class="vlc-match-home">
      <div class="vlc-match-name">Team Home</div>
    </li>
    <li class="vlc-match-vs">VS</li>
    <li class="vlc-match-away">
      <div class="vlc-match-name">Team Away</div>
    </li>
  </ul>
  <?php if($channel_origin == 'competition'){ ?>
  <div class="vlc-competition-name">
    Competition Name
  </div>
  <div class="vlc-competition-info">
    <div class="vlc-competition-round"><?php echo $random_competition[array_rand($random_competition)]; ?></div>
    <div class="vlc-competition-date">00 Sep 2022</div>
  </div>
  <?php } ?>
</div>