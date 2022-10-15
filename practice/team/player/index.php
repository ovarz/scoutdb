<?php 
  $page='dashboard';
  $menu='full';
  $channel='practice';
  $backto_link='practice/team/'; $backto_label='Team';
  require ('../../../inc/base.php')
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
      <div class="breadcrumb-link content_center">
        <span>Player_Full_Name</span>
      </div>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <h2 class="section-title">
	    <div class="section-title-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/menu-practice.svg')?></div>
	    <div class="section-title-label">Choose Your Training</div>
	  </h2>
      
      <div class="training-container">Physical Practice</div>
      <div class="training-list">
        <?php 
          $training_array = array();
          $training_array[]=array('training_link'=>'endurance','training_name'=>'endurance');
          $training_array[]=array('training_link'=>'speed','training_name'=>'speed');
          $training_array[]=array('training_link'=>'speed','training_name'=>'reaction');
          $training_array[]=array('training_link'=>'speed','training_name'=>'agility');
          $training_array[]=array('training_link'=>'power','training_name'=>'power');
          $training_array[]=array('training_link'=>'power','training_name'=>'flexibility');
          foreach($training_array as $training_list){
        ?>
          <?php $training_link='practice/team/player/'; $training_rating_total=rand(0,5); 
          require ($_SERVER['SCOUTDB'].'module/training-list.php')?>
        <?php } ?>
      </div>
      
      <div class="training-container">Technical Practice</div>
      <div class="training-list">
        <?php 
          $training_array = array();
          $training_array[]=array('training_link'=>'dribble','training_name'=>'dribble');
          $training_array[]=array('training_link'=>'speed','training_name'=>'passing');
          $training_array[]=array('training_link'=>'speed','training_name'=>'shooting');
          $training_array[]=array('training_link'=>'speed','training_name'=>'control');
          $training_array[]=array('training_link'=>'speed','training_name'=>'turning');
          $training_array[]=array('training_link'=>'speed','training_name'=>'forward moves');
          $training_array[]=array('training_link'=>'power','training_name'=>'ball mastery');
          foreach($training_array as $training_list){
        ?>
          <?php $training_link='practice/team/player/'; $training_rating_total=rand(0,5);
          require ($_SERVER['SCOUTDB'].'module/training-list.php')?>
        <?php } ?>
      </div>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/practice.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>