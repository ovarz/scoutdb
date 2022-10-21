<?php
  $random_username=array("Pay Joe","Rhou Jya Lee","Rush Die","Soul as Three");
  $random_position=array("Goalkeeper","Right Back","Right Wing Back","Left Back","Left Wing Back","Center Back","Defending Midfielder","Left Midfielder","Right Midfielder","Center Midfielder","Attacking Midfielder","Left Winger","Right Winger","Striker","Second Striker");
  $random_feet=array("Left","Right","Left","Right");
?>



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
	  <li class="ptl-player-label">Club</li>
	  <li class="ptl-player-data">Team Name</li>
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
	  <li class="ptl-player-data"><?php echo $random_feet[array_rand($random_feet)]; ?></li>
	</ul>
  </div>
</div>