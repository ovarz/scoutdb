<a aria-label="Hasil Latihan" title="Hasil Latihan" class="rpl-box" href="practice/team/player/speed/finish.php">
  <div class="rpl-photo">
	<div class="rpl-frame flex_ori thumb-loading">
	  <img alt="img_title" class="lazyload" data-original="img/sample/player-<?php echo rand(1,20); ?>.jpg" />
	</div>
  </div>
  <div class="rpl-info">
	<span>
	  <div class="rpl-name"><?php echo $random_username[array_rand($random_username)]; ?></div>
	  <div class="rpl-rating rating-icon">
		<?php $training_rating_total=rand(1,5); for ($training_rating=1; $training_rating <= $training_rating_total ; $training_rating++) { ?>
		  <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
		<?php } ?>
		<?php for ($training_rating=1; $training_rating <= 5 - $training_rating_total ; $training_rating++) { ?>
		  <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
		<?php } ?>
	  </div>
	  <div class="rpl-date">Last update : 00 Sep 0000 - 00:00</div>
	</span>
  </div>
</a>