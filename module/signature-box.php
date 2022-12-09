<button title="Signature" class="signature-box" 
<?php if($signature_content == 'no'){ ?>onclick="location.href='competition/in-game-administration/recap/submit.php';"<?php } ?>>
  <div class="signature-input">
    <?php if($signature_content == 'no'){ ?>
	  <div class="signature-here">
	    <div class="signature-here-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/plus.svg')?></div>
	    <div class="signature-here-label">Input Signature Here</div>
	  </div>
	<?php } ?>
    <?php if($signature_content == 'yes'){ ?>
	  <img alt="img_title" class="lazyload" data-original="img/sample/signature-<?php echo rand(1,10); ?>.png" />
	<?php } ?>
  </div>
  <div class="signature-label"><?php echo $signature_label; ?></div>
</button>