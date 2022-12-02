<div class="clc-frame">
  <div class="clc-player-box">
  
    <?php if($clc_mode == 'form'){ ?>
      <button title="InsertPlayer" class="open-popup clc-player-insert">
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
      <?php $clc_mode='form'; require ($_SERVER['SCOUTDB'].'module/player-card-small.php')?>
      <div class="clc-player-action">
        <button title="InsertPlayer" class="open-popup clc-player-button">
          <?php require ($_SERVER['SCOUTDB'].'img/icon/switch.svg')?>
        </button>
	    <?php if($clc_bottom == 'button'){ ?>
        <button title="EditPlayerNumber" class="open-popup clc-player-button">
          <?php require ($_SERVER['SCOUTDB'].'img/icon/edit.svg')?>
        </button>
        <button title="RemovePlayer" class="clc-player-button">
          <?php require ($_SERVER['SCOUTDB'].'img/icon/close.svg')?>
        </button>
		<?php } ?>
      </div>
	<?php } ?>
	
  </div>
</div>