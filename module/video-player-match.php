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
    <div class="vlc-competition-stage"><?php echo $random_competition[array_rand($random_competition)]; ?></div>
    <div class="vlc-competition-date">00 Sep 2022</div>
  </div>
  <div class="vlc-competition-babak">
    <span>
	  <?php if($subchannel != 'in-game-administration'){ ?>
        <a aria-label="Round" title="Round" class="btn vlc-cb-link" href="<?php echo $next_link; ?>">
          1st
        </a>
        <a aria-label="Round" title="Round" class="btn vlc-cb-link" href="<?php echo $next_link; ?>">
          2nd
        </a>
        <a aria-label="Round" title="Round" class="btn vlc-cb-link" href="<?php echo $next_link; ?>">
          ET1
        </a>
        <a aria-label="Round" title="Round" class="btn vlc-cb-link" href="<?php echo $next_link; ?>">
          ET2
        </a>
        <a aria-label="Round" title="Round" class="btn vlc-cb-link" href="<?php echo $next_link; ?>">
          Pen
        </a>
	  <?php } ?>
	  <?php if($subchannel == 'in-game-administration'){ ?>
        <a aria-label="<?php echo $next_label; ?>" title="<?php echo $next_label; ?>" class="btn vlc-cb-link" href="<?php echo $next_link; ?>">
          <?php echo $next_label; ?>
        </a>
	  <?php } ?>
	</span>
  </div>
  <?php } ?>
</div>