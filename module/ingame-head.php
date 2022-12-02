<div class="iga-team-info">
  <div class="iga-team-emblem content_center">
    <img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(1,10); ?>.svg" />
  </div>
  <div class="iga-team-name">Team Home</div>
</div>
<div class="iga-info content_center">
  <span class="iga-info-container">
    <div class="iga-info-score content_center">
	  <b>0</b>
	</div>
    <div class="iga-info-separate content_center">:</div>
    <div class="iga-info-score content_center">
	  <b>0</b>
	</div>
    <div class="iga-info-time content_center">
	  <?php if($iga_time == 'first-half'){ ?>
	    <b>00:00</b>
	  <?php } ?>
	  <?php if($iga_time == 'second-half'){ ?>
	    <b><?php echo rand(10,44); ?>:<?php echo rand(10,59); ?></b>
	  <?php } ?>
	</div>
  </span>
</div>
<div class="iga-team-info">
  <div class="iga-team-emblem content_center">
    <img alt="img_title" class="lazyload" data-original="img/sample/team-<?php echo rand(11,20); ?>.svg" />
  </div>
  <div class="iga-team-name">Team Away</div>
</div>