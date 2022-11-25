<div class="clc-frame">
  <div class="clc-player-box">
  
    <?php if($clc_mode == 'form'){ ?>
      <button title="InsertPlayer" class="clc-player-insert">
        <span>Insert Player.....</span>
      </button>
	  <div class="clc-player-dropdown content_center">
	    <?php require ($_SERVER['SCOUTDB'].'img/icon/dropdown.svg')?>
	  </div>
	<?php } ?>
  
    <?php if($clc_mode == 'box'){ ?>
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
        <button title="EditPlayerNumber" class="clc-player-button">
          <?php require ($_SERVER['SCOUTDB'].'img/icon/edit.svg')?>
        </button>
        <button title="InsertPlayer" class="clc-player-button">
          <?php require ($_SERVER['SCOUTDB'].'img/icon/switch.svg')?>
        </button>
        <button title="RemovePlayer" class="clc-player-button">
          <?php require ($_SERVER['SCOUTDB'].'img/icon/close.svg')?>
        </button>
      </div>
	<?php } ?>
	
  </div>
</div>