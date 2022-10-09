<div id="popup-Logout" class="rancak-popup hide">
  <div class="rancak-popup-overlay"></div>
  <button title="Close" class="popup-close-button rancak-popup-close content_center">
    <?php require ($_SERVER['SCOUTDB'].'img/icon/close.svg')?>
  </button>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box popup-logout">
	  <div class="popup-logout-label">Are you sure?</div>
	  <div class="popup-logout-action">
	    <button title="Yes" class="btn popup-logout-yes" onclick="location.href=' ';">Yes</button>
	    <button title="No" class="btn popup-close-button popup-logout-no">No</button>
	  </div>
	</div>
  </div>
</div>



<?php if($practice_type == 'endurance') { ?>
<div id="popup-V20" class="rancak-popup hide">
  <div class="rancak-popup-overlay"></div>
  <button title="Close" class="popup-close-button rancak-popup-close content_center">
    <?php require ($_SERVER['SCOUTDB'].'img/icon/close.svg')?>
  </button>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box popup-v20">
	  <div class="popup-v20-label">Input V20 Max</div>
	  <input type="text" class="popup-v20-field" placeholder="Input Number Here"
	  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"/>
	  <div class="popup-v20-action">
	    <button title="No" class="btn popup-close-button popup-v20-cancel">Cancel</button>
	    <button title="Yes" class="btn popup-v20-save" onclick="location.href='practice/team/player/endurance/step3.php';">Save</button>
	  </div>
	</div>
  </div>
</div>
<?php } ?>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
</noscript>
<script defer>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function(){window.setTimeout(loadDeferredStyles,0);});
  else window.addEventListener('load', loadDeferredStyles);
</script>
<div id="fb-root"></div>
<script defer src="js/lazysizes.min.js"></script>
<script defer rancak-hold="js/rancak.js"></script>



</body>
</html>