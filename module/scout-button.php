<div class="psd-row psd-row-action">
  <?php if($scout_button == 'default') { ?>
  <button class="psd-button psd-button-no content_center">
    <?php require ($_SERVER['SCOUTDB'].'img/icon/circle-no.svg')?>
  </button>
  <?php } ?>
  
  <?php if($scout_button == 'plusminus') { ?>
  <button class="psd-button psd-button-minus content_center">
    <?php require ($_SERVER['SCOUTDB'].'img/icon/minus.svg')?>
  </button>
  <?php } ?>
  
  <?php if($scout_button == 'card') { ?>
  <button class="psd-button psd-button-card-red content_center">
    <?php require ($_SERVER['SCOUTDB'].'img/icon/card.svg')?>
  </button>
  <?php } ?>
  
  
  
  <div class="psd-info content_center">
    <span><?php echo $scout_label; ?></span>
  </div>
  
  
  
  <?php if($scout_button == 'default') { ?>
  <button class="psd-button psd-button-yes content_center">
    <?php require ($_SERVER['SCOUTDB'].'img/icon/circle-yes.svg')?>
  </button>
  <?php } ?>
  
  <?php if($scout_button == 'plusminus') { ?>
  <button class="psd-button psd-button-plus content_center">
    <?php require ($_SERVER['SCOUTDB'].'img/icon/plus.svg')?>
  </button>
  <?php } ?>
  
  <?php if($scout_button == 'card') { ?>
  <button class="psd-button psd-button-card-yellow content_center">
    <?php require ($_SERVER['SCOUTDB'].'img/icon/card.svg')?>
  </button>
  <?php } ?>
</div>