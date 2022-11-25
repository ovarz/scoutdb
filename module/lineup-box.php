<div class="clc-frame">
  <div class="clc-player-box">
    <div class="clc-player-photo">
	  <div class="clc-player-thumb flex_ori thumb-loading">
    	<img alt="img_title" class="lazyload" data-original="img/sample/player-<?php echo rand(1,20); ?>.jpg" />
	  </div>
	</div>
	<div class="clc-player-number">
	  <div class="clc-player-circle content_center">
	    <span><?php echo rand(1,99); ?></span>
	  </div>
	</div>
	<div class="clc-player-info">
	  <div class="clc-player-position"><?php echo $random_position_short[array_rand($random_position_short)]; ?></div>
	  <div class="clc-player-name"><?php echo $random_username[array_rand($random_username)]; ?></div>
	</div>
	<div class="clc-player-action">
	  actions
	</div>
  </div>
</div>