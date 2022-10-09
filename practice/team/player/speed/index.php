<?php 
  $page='dashboard';
  $menu='full';
  $channel='practice';
  $backto_link='practice/team/player/'; $backto_label='Player';
  require ('../../../../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php $practice_result='none'; require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<link rel="stylesheet" type="text/css" href="css/practice.css?<?php echo $anticache; ?>"/>
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
      <div class="breadcrumb-link content_center">
        <span>Speed</span>
      </div>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <h2 class="section-title">
	    <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/menu-practice.svg')?></div>
	    <div class="section-title-label">Speed</div>
	  </h2>
      <div class="practice-tutorial">
        <div class="practice-tutorial-left">
          <div class="ptl-box">
		    <button title="Practice Info" class="ptl-toggle">
			  <span>
			    <div class="ptl-toggle-label">Practice Objective</div>
			    <?php require ($_SERVER['SCOUTDB'].'img/icon/dropdown.svg')?>
			  </span>
			</button>
            <ul class="ptl-list">
              <?php for ($i=1; $i <= 3 ; $i++) { ?>
              <li><?php echo $random_keyword[array_rand($random_keyword)]; ?></li>
              <?php } ?>
            </ul>
          </div>
          <div class="ptl-box">
		    <button title="Practice Info" class="ptl-toggle">
			  <span>
			    <div class="ptl-toggle-label">Equipments Needed</div>
			    <?php require ($_SERVER['SCOUTDB'].'img/icon/dropdown.svg')?>
			  </span>
			</button>
            <ul class="ptl-list">
              <?php for ($i=1; $i <= 7 ; $i++) { ?>
              <li><?php echo $random_keyword[array_rand($random_keyword)]; ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="practice-tutorial-right">
          <div class="practice-tutorial-sticky">
            <div class="practice-tutorial-video flex_ori thumb-loading">
              <iframe width="560" height="315" class="lazyload" data-original="https://www.youtube.com/embed/VZrt9geh6xA?autoplay=1&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="practice-tutorial-action">
              <a aria-label="Start Practice" title="Back" class="btn pta-button pta-button-full pta-button-start content_center" 
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
<script defer rancak-hold="js/practice.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>