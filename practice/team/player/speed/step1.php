<?php 
  $page='dashboard';
  $channel='practice';
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
      <div class="section-title">
	    <div class="section-title-label">Speed</div>
	  </div>
      <div class="practice-tutorial">
        <div class="practice-tutorial-left">
          <div class="ptl-box">
            <div class="ptl-title">Testee Info</div>
            <div>
              tes
            </div>
          </div>
          <div class="ptl-box">
            <div class="ptl-title">Matrix Score</div>
            <ul class="ptl-rating-list">
              <li class="ptl-rating-star rating-icon">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
              </li>
              <li class="ptl-rating-condition">&lt; 1,08s</li>
            </ul>
            <ul class="ptl-rating-list">
              <li class="ptl-rating-star rating-icon">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
              </li>
              <li class="ptl-rating-condition">1,09s - 1,27s</li>
            </ul>
            <ul class="ptl-rating-list">
              <li class="ptl-rating-star rating-icon">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
              </li>
              <li class="ptl-rating-condition">1,28s - 1,46s</li>
            </ul>
            <ul class="ptl-rating-list">
              <li class="ptl-rating-star rating-icon">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
              </li>
              <li class="ptl-rating-condition">1,47s - 1,65s</li>
            </ul>
            <ul class="ptl-rating-list">
              <li class="ptl-rating-star rating-icon">
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-filled.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
                <?php require ($_SERVER['SCOUTDB'].'img/icon/star-outline.svg')?>
              </li>
              <li class="ptl-rating-condition">&gt; 1,65s</li>
            </ul>
          </div>
        </div>
        <div class="practice-tutorial-right">
          <div class="practice-tutorial-sticky">
            <div class="practice-tutorial-video flex_ori thumb-loading">
              <iframe width="560" height="315" class="lazyload" data-original="https://www.youtube.com/embed/VZrt9geh6xA?autoplay=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="practice-tutorial-action">
              <a aria-label="Cancel" title="Back" class="btn pta-button pta-button-cancel content_center" href="practice/team/player/">
                <span>Cancel</span>
              </a>
              <a aria-label="Start Practice" title="Back" class="btn pta-button pta-button-start content_center" 
              href="practice/team/player/speed/step1.php">
                <span>Start Practice</span>
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