<a aria-label="<?php echo($training_list['training_name'])?>" title="<?php echo($training_list['training_name'])?>" class="training-link" 
href="<?php echo $training_link; ?><?php echo($training_list['training_link'])?>">
  <div class="training-name"><?php echo($training_list['training_name'])?></div>
  <div class="training-data">
    <div class="training-icon rating-icon">
      <?php for ($training_rating=1; $training_rating <= $training_rating_total ; $training_rating++) { ?>
        <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
      <?php } ?>
      <?php for ($training_rating=1; $training_rating <= 5 - $training_rating_total ; $training_rating++) { ?>
        <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
      <?php } ?>
    </div>
    <div class="training-update">
      Last Update :<br />
      <?php if($training_rating_total == 0) { ?>
        _
      <?php } ?>
      <?php if($training_rating_total != 0) { ?>
        00 Jan 0000
      <?php } ?>
    </div>
    <button title="Start Practice" class="training-start">Start</button>
  </div>
</a>