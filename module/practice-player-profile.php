<div class="ptl-box ptl-profile">
  <div class="ptl-player-photo">
    <div class="ptl-player-frame flex_ori thumb-loading">
	  <img alt="img_title" class="lazyload" data-original="img/sample/player-<?php echo rand(1,20); ?>.jpg" />
	</div>
  </div>
  <div class="ptl-player-info">
    <ul class="ptl-player-row">
	  <li class="ptl-player-label">Name</li>
	  <li class="ptl-player-data"><?php echo $random_username[array_rand($random_username)]; ?></li>
	</ul>
    <ul class="ptl-player-row">
	  <li class="ptl-player-label">Position</li>
	  <li class="ptl-player-data"><?php echo $random_position[array_rand($random_position)]; ?></li>
	</ul>
    <ul class="ptl-player-row">
	  <li class="ptl-player-label">Jersey Number</li>
	  <li class="ptl-player-data"><?php echo rand(1,99); ?></li>
	</ul>
    <ul class="ptl-player-row">
	  <li class="ptl-player-label">Age</li>
	  <li class="ptl-player-data"><?php echo rand(15,25); ?></li>
	</ul>
    <ul class="ptl-player-row">
	  <li class="ptl-player-label">Weight</li>
	  <li class="ptl-player-data"><?php echo rand(50,75); ?> kg</li>
	</ul>
    <ul class="ptl-player-row">
	  <li class="ptl-player-label">Height</li>
	  <li class="ptl-player-data"><?php echo rand(140,200); ?> cm</li>
	</ul>
    <ul class="ptl-player-row">
	  <li class="ptl-player-label">Dominant Foot</li>
	  <li class="ptl-player-data">
        <?php
          $a=array("Left","Right","Left","Right");
          $random_keys=array_rand($a,2);
          echo $a[$random_keys[0]]."";
        ?>
	  </li>
	</ul>
  </div>
</div>