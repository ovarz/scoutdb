<div class="recap-content-box recap-content-event" id="recap-content-event">
  <div class="vlt-list">
	<?php for ($i=1; $i <= 20 ; $i++) { ?>
	  <div title="00:00" class="vlt-list-row">
		<div class="vlt-list-data"><b>000:00</b></div>
		<div class="vlt-list-info">
		  <a aria-label="<?php echo $random_username[array_rand($random_username)]; ?>" 
		  title="<?php echo $random_username[array_rand($random_username)]; ?>" class="vlt-list-player" href="home.php">
			<?php echo $random_username[array_rand($random_username)]; ?>
		  </a>
		  <div class="vlt-list-desc"><?php echo $random_keyword[array_rand($random_keyword)]; ?></div>
		</div>
	  </div>
	<?php } ?>
  </div>
</div>