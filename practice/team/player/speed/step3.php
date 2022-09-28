<?php 
  $page='dashboard';
  $channel='practice';
  $backto_link='practice/team/player/speed/'; $backto_label='Speed';
  require ('../../../../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<link rel="stylesheet" type="text/css" href="css/practice.css"/>
<div class="rancak-container">
  <span class="width-max">

    <section aria-label="Breadcrumb" class="breadcrumb">
      <a aria-label="Home" title="Home" class="breadcrumb-link content_center" href="home.php">
        <?php require ($_SERVER['SCOUTDB'].'img/icon/home.svg')?>
      </a>
      <a aria-label="Practice" title="Practice" class="breadcrumb-link content_center" href="practice/">
        <span>Practice</span>
      </a>
      <a aria-label="Team Full Name FC" title="Team Full Name FC" class="breadcrumb-link content_center" href="practice/team/">
        <span>Team_Full_Name FC</span>
      </a>
      <a aria-label="Player_Full_Name" title="Player_Full_Name" class="breadcrumb-link content_center" href="practice/team/player/">
        <span>Player_Full_Name</span>
      </a>
      <a aria-label="Speed" title="Speed" class="breadcrumb-link content_center" href="practice/team/player/speed/">
        <span>Speed</span>
      </a>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <h2 class="section-title">
	    <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/section-title.svg')?></div>
	    <div class="section-title-label">Speed</div>
	  </h2>
      <div class="practice-tutorial practice-tutorial-process">
        <div class="practice-tutorial-left">
		  <?php require ($_SERVER['SCOUTDB'].'module/practice-player-profile.php')?>
		  <div class="ptl-box ptl-comment">
            <textarea class="plt-comment-box" placeholder="Masukkan komentar......"></textarea>
			<button aria-label="Submit Comment" class="btn content_center">
              <span>Submit Comment</span>
            </button>
		  </div>
        </div>
		
		
		
        <div class="practice-tutorial-right">
          <div class="practice-tutorial-sticky">
		    <div class="practice-result-info">
              <ul class="pri-row">
                <li class="pri-label">Practice ID</li>
                <li class="pri-data">#123456</li>
              </ul>
              <ul class="pri-row">
                <li class="pri-label">Date & Time</li>
                <li class="pri-data">00 September 0000 - 00:00</li>
              </ul>
			</div>
		    <div class="practice-result-rating">
  			  <div class="ptl-title">Rating Result</div>
			  <div class="rating-icon">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
			  </div>
			</div>
            <div class="practice-countdown">
			  <div class="practice-countdown-hours">00</div>
			  <div class="practice-countdown-minutes">00</div>
			  <div class="practice-countdown-seconds">13</div>
			</div>
            <div class="practice-tutorial-action">
              <a aria-label="Cancel Practice" title="Cancel Practice" class="btn pta-button pta-button-cancel content_center" 
              href="practice/team/player/speed/step1.php">
                <span>Retake Practice</span>
              </a>
              <a aria-label="Start Practice" title="Start Practice" class="btn pta-button pta-button-start content_center" 
              href="practice/team/player/speed/result.php">
                <span>Submit Practice</span>
              </a>
            </div>
          </div>    
        </div>
      </div>
    </section>
	
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>