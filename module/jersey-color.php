<div class="clc-jersey-container clc-jersey-<?php echo $jersey_label; ?>" data-color="<?php echo $color_display; ?>">
  <div class="clc-jersey-label"><?php echo $jersey_label; ?></div>
  <div class="clc-jersey-preview">
	<?php require ($_SERVER['SCOUTDB'].'img/icon/jersey.svg')?>
  </div>
  <?php if($color_switch == 'yes'){ ?>
  <div class="clc-jersey-choice">
	<button title="Jersey" data-color="<?php echo $color_1; ?>" class="clc-jersey-button"></button>
	<button title="Jersey" data-color="<?php echo $color_2; ?>" class="clc-jersey-button"></button>
	<button title="Jersey" data-color="<?php echo $color_3; ?>" class="clc-jersey-button"></button>
  </div>
  <?php } ?>
</div>