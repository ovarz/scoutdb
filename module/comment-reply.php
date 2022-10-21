<div class="ptl-box ptl-postcomment">
  <div class="ptl-title">Comments</div>
  <div class="ptl-postcomment-box">
    <?php for ($i=1; $i <= 3 ; $i++) { ?>
	  <div class="ptl-postcomment-list">
	    <div class="ptl-postcomment-thumb">
		  <div class="ptl-postcomment-frame flex_ori thumb-loading">
		    <img alt="img_title" class="lazyload" data-original="img/sample/player-<?php echo rand(1,20); ?>.png" />
		  </div>
		</div>
		<div class="ptl-postcomment-info content_center">
		  <span>
		    <div class="ptl-postcomment-username"><?php echo $random_username[array_rand($random_username)]; ?></div>
			<div class="ptl-postcomment-date">00/00/0000</div>
			<div class="ptl-postcomment-content"><?php echo $random_keyword[array_rand($random_keyword)]; ?></div>
		  </span>
		</div>
	  </div>
	<?php } ?>
  </div>
</div>