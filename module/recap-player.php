<div class="rcl-player">
  <div class="rcl-player-subs content_center">
    <?php if($card == 'yes'){ ?>
	  <?php require ($_SERVER['SCOUTDB'].'img/icon/card.svg')?>
	<?php } ?>
    <?php if($goal == 'yes'){ ?>
	  <div class="clc-player-button clc-player-stat">
        <div class="clc-ps-icon">
          <?php require ($_SERVER['SCOUTDB'].'img/icon/ball.svg')?>
		</div>
        <div class="clc-ps-label"><?php echo rand(1,3); ?></div>
      </div>
	<?php } ?>
    <?php if($subs == 'out'){ ?>
	  <?php require ($_SERVER['SCOUTDB'].'img/icon/sub-out.svg')?>
	<?php } ?>
    <?php if($subs == 'in'){ ?>
	  <?php require ($_SERVER['SCOUTDB'].'img/icon/sub-in.svg')?>
	<?php } ?>
  </div>
  <div class="rcl-player-number content_center">
    <span><?php echo rand(1,50); ?></span>
  </div>
  <div class="rcl-player-name content_center">
    <span><?php echo $random_username[array_rand($random_username)]; ?></span>
  </div>
</div>