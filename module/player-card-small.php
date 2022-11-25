<button title="Choose This Player" class="clc-player-info" onclick="location.href='competition/in-game-administration/info/lineup-filled.php';">
  <div class="clc-player-position"><?php echo $random_position_short[array_rand($random_position_short)]; ?></div>
  <div class="clc-player-name"><?php echo $random_username[array_rand($random_username)]; ?></div>
</button>