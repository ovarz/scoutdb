<?php 
  $page='dashboard';
  $menu='full';
  $channel='practice';
  $practice_type='control';
  $report='yes';
  $report_link='practice/team/player/'.$practice_type.'/result.php';
  $report_label='Report';
  $backto_link='practice/team/player/'.$practice_type.'/'; $backto_label=$practice_type;
  require ('../../../../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
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
      <a aria-label="<?php echo $practice_type; ?>" title="<?php echo $practice_type; ?>" class="breadcrumb-link content_center" 
	  href="practice/team/player/<?php echo $practice_type; ?>/">
        <span><?php echo $practice_type; ?></span>
      </a>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <h2 class="section-title">
	    <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/menu-practice.svg')?></div>
	    <div class="section-title-label"><?php echo $practice_type; ?></div>
	  </h2>
      <div class="practice-tutorial practice-tutorial-process">
        <div class="practice-tutorial-left">
		  <?php require ($_SERVER['SCOUTDB'].'module/practice-player-profile.php')?>
		  <?php require ($_SERVER['SCOUTDB'].'module/practice-matrix-score.php')?>
        </div>
		
		
		
        <div class="practice-tutorial-right">
          <div class="practice-tutorial-sticky">
            <div class="practice-bleep">
			  <div class="practice-bleep-container practice-bleep-level" style="grid-column:1/3;">
			    <div class="practice-bleep-label">Attempt</div>
				<div class="practice-bleep-box">
				  <b>1</b>
				</div>
			  </div>
			  <button class="practice-bleep-container practice-bleep-fail">
				<div class="practice-score-box">
				  <?php require ($_SERVER['SCOUTDB'].'img/icon/bleep-fail.svg')?>
				  <b>0</b>
				</div>
			    <div class="practice-bleep-button">Fail</div>
			  </button>
			  <button class="practice-bleep-container practice-bleep-success">
				<div class="practice-score-box">
				  <?php require ($_SERVER['SCOUTDB'].'img/icon/bleep-success.svg')?>
				  <b>1</b>
				</div>
			    <div class="practice-bleep-button">Success</div>
			  </button>
			</div>
            <div class="practice-tutorial-action">
              <a aria-label="Start Practice" title="Start Practice" class="btn pta-button pta-button-start content_center" 
              href="practice/team/player/<?php echo $practice_type; ?>/step3.php">
                <span>Finish Practice</span>
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