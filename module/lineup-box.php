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
		<?php if (isset($clc_card)){ ?>
          <?php if($clc_card == 'yellow'){ ?>
            <div class="clc-player-button clc-player-stat">
              <div class="clc-ps-icon clc-ps-yellow">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/card.svg')?>
              </div>
              <div class="clc-ps-label"></div>
            </div>
          <?php } ?>
          <?php if($clc_card == 'red'){ ?>
            <div class="clc-player-button clc-player-stat">
              <div class="clc-ps-icon clc-ps-red">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/card.svg')?>
              </div>
              <div class="clc-ps-label"></div>
            </div>
          <?php } ?>
          <?php if($clc_goal != ''){ ?>
            <div class="clc-player-button clc-player-stat">
              <div class="clc-ps-icon">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/ball.svg')?>
              </div>
              <div class="clc-ps-label"><?php echo $clc_goal; ?></div>
            </div>
          <?php } ?>
          <?php if($clc_pen == 'fail'){ ?>
            <div class="clc-player-button clc-player-stat">
              <div class="clc-ps-icon">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/ball-pen-fail.svg')?>
              </div>
              <div class="clc-ps-label"><?php echo $clc_goal; ?></div>
            </div>
          <?php } ?>
          <?php if($clc_pen == 'success'){ ?>
            <div class="clc-player-button clc-player-stat">
              <div class="clc-ps-icon">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/ball-pen-success.svg')?>
              </div>
              <div class="clc-ps-label"><?php echo $clc_goal; ?></div>
            </div>
          <?php } ?>
		<?php } ?>
      </div>
	<?php } ?>
	
  </div>
</div>