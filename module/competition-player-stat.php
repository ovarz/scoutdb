<div class="competition-player-stat">
  <div class="cps-container">
    <?php 
	  $stat_array = array();
	  $stat_array[]=array('stat_label'=>'heading');
	  $stat_array[]=array('stat_label'=>'tackling');
	  $stat_array[]=array('stat_label'=>'shooting');
	  $stat_array[]=array('stat_label'=>'control');
	  foreach($stat_array as $stat_list){ 
	?>
	  <div class="cps-box">
	    <div class="cps-label"><?php echo($stat_list['stat_label'])?></div>
		<div class="cps-score cps-score-red">00</div>
		<div class="cps-score cps-score-green">00</div>
	  </div>
	<?php } ?>
	  <div class="cps-box">
	    <div class="cps-label">red/yellow</div>
		<div class="cps-score cps-score-red">00</div>
		<div class="cps-score cps-score-yellow">00</div>
	  </div>
    <?php 
	  $stat_array = array();
	  $stat_array[]=array('stat_label'=>'jumping');
	  $stat_array[]=array('stat_label'=>'offide');
	  $stat_array[]=array('stat_label'=>'goal');
	  $stat_array[]=array('stat_label'=>'assist');
	  $stat_array[]=array('stat_label'=>'penalty');
	  $stat_array[]=array('stat_label'=>'foul');
	  $stat_array[]=array('stat_label'=>'attack');
	  $stat_array[]=array('stat_label'=>'defence');
	  $stat_array[]=array('stat_label'=>'corner');
	  foreach($stat_array as $stat_list){ 
	?>
	  <div class="cps-box">
	    <div class="cps-label"><?php echo($stat_list['stat_label'])?></div>
		<div class="cps-score cps-score-red">00</div>
		<div class="cps-score cps-score-green">00</div>
	  </div>
	<?php } ?>
  </div>
  
  <div class="cps-title">Passing</div>
  <div class="cps-container">
    <?php 
	  $stat_array = array();
	  $stat_array[]=array('stat_label'=>'through');
	  $stat_array[]=array('stat_label'=>'crossing');
	  $stat_array[]=array('stat_label'=>'long');
	  $stat_array[]=array('stat_label'=>'short');
	  foreach($stat_array as $stat_list){ 
	?>
	  <div class="cps-box">
	    <div class="cps-label"><?php echo($stat_list['stat_label'])?></div>
		<div class="cps-score cps-score-red">00</div>
		<div class="cps-score cps-score-green">00</div>
	  </div>
	<?php } ?>
  </div>
</div>