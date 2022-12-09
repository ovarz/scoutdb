<div class="recap-content-box recap-content-lineup" id="recap-content-lineup">
  <div class="rcl-container">
    <div class="rcl-title">Starting Line Up</div>
    <div class="rcl-team rcl-team-home">
      <?php for ($i=1; $i <= 4 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
      <?php $subs='out'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php for ($i=1; $i <= 3 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
      <?php $subs='out'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php for ($i=1; $i <= 2 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
    </div>
    <div class="rcl-team rcl-team-away">
      <?php for ($i=1; $i <= 3 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
      <?php $subs='out'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php for ($i=1; $i <= 2 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
      <?php $subs='out'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php $subs='out'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php for ($i=1; $i <= 3 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
    </div>
  </div>
  
  
  
  <div class="rcl-container rcl-container-subs">
    <div class="rcl-title">Subtitution</div>
    <div class="rcl-team rcl-team-home">
      <?php for ($i=1; $i <= 2 ; $i++) { ?>
        <?php require ($_SERVER['SCOUTDB'].'module/recap-subs.php')?>
      <?php } ?>
	</div>
    <div class="rcl-team rcl-team-away">
      <?php for ($i=1; $i <= 3 ; $i++) { ?>
        <?php require ($_SERVER['SCOUTDB'].'module/recap-subs.php')?>
      <?php } ?>
	</div>
  </div>
  
  
  
  <div class="rcl-container">
    <div class="rcl-title">Subtitute Player</div>
    <div class="rcl-team rcl-team-home">
      <?php for ($i=1; $i <= 2 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
      <?php $subs='in'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php for ($i=1; $i <= 4 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
      <?php $subs='in'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php for ($i=1; $i <= 9 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
    </div>
    <div class="rcl-team rcl-team-away">
      <?php for ($i=1; $i <= 1 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
      <?php $subs='in'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php for ($i=1; $i <= 2 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
      <?php $subs='in'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php $subs='in'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php for ($i=1; $i <= 10 ; $i++) { ?>
        <?php $subs='none'; require ($_SERVER['SCOUTDB'].'module/recap-player.php')?>
      <?php } ?>
    </div>
  </div>
</div>