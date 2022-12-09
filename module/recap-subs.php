<div class="rcl-subs">
  <div class="rcl-subs-min content_center">
    <span><?php echo rand(1,89); ?>'</span>
  </div>
  <div class="rcl-subs-player">
    <div class="rcl-subs-out">
      <div class="rcl-subs-name"><?php echo $random_username[array_rand($random_username)]; ?></div>
      <div class="rcl-subs-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/sub-out.svg')?></div>
    </div>
    <div class="rcl-subs-in">
      <div class="rcl-subs-name"><?php echo $random_username[array_rand($random_username)]; ?></div>
      <div class="rcl-subs-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/sub-in.svg')?></div>
    </div>
  </div>
</div>