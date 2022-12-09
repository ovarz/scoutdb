<div class="rcl-player">
  <div class="rcl-player-subs content_center">
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