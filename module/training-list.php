<a aria-label="<?php echo($training_list['training_name'])?>" title="<?php echo($training_list['training_name'])?>" class="training-link" 
href="<?php echo $training_link; ?><?php echo($training_list['training_link'])?>">
  <div class="training-icon">
    <?php require ($_SERVER['SCOUTDB'].'img/icon/training-'.$training_list['training_id'].'.svg')?>
  </div>
  <div class="training-name"><?php echo($training_list['training_name'])?></div>
</a>