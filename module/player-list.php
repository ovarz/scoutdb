<a aria-label="PLAYER_NAME" title="PLAYER_NAME" class="player-link" href="<?php echo $player_link; ?>">
  <div class="player-photo flex_ori thumb-loading">
    <img alt="img_title" class="lazyload" data-original="img/sample/player-<?php echo rand(1,20); ?>.jpg" />
  </div>
  <div class="player-info">
    <div class="player-name"><?php echo $random_username[array_rand($random_username)]; ?></div>
    <div class="player-position"><?php echo $random_position[array_rand($random_position)]; ?></div>
  </div>
</a>