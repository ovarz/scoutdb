<a aria-label="Hasil Latihan" title="Hasil Latihan" class="rpp-column rpp-detail" href="practice/team/player/speed/finish.php">
  <?php if($practice_table == 'contain') { ?>
    <div class="rpp-time">00:00</div>
    <div class="rpp-time rating-icon">
      <?php $training_rating_total=rand(1,5); for ($training_rating=1; $training_rating <= $training_rating_total ; $training_rating++) { ?>
        <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
      <?php } ?>
      <?php for ($training_rating=1; $training_rating <= 5 - $training_rating_total ; $training_rating++) { ?>
        <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
      <?php } ?>
    </div>
  <?php } ?>
  <?php if($practice_table == 'empty') { ?>
    <div class="rpp-empty">-</div>
  <?php } ?>
</a>