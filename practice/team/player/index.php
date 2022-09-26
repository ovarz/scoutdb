<?php 
  $page='dashboard';
  $channel='practice';
  require ('../../../inc/base.php')
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
      <div class="breadcrumb-link content_center">
        <span>Player_Full_Name</span>
      </div>
    </section>
	
	

    <section aria-label="Section Practice" class="section-container">
      <div class="section-title">
	    <div class="section-title-label">Choose Your Training</div>
	  </div>
      
      <div class="training-container">Physical Practice</div>
      <div class="training-list">
        <?php 
          $training_array = array();
          $training_array[]=array('training_link'=>'speed','training_id'=>'speed','training_name'=>'endurance');
          $training_array[]=array('training_link'=>'speed','training_id'=>'speed','training_name'=>'speed');
          $training_array[]=array('training_link'=>'speed','training_id'=>'speed','training_name'=>'reaction');
          $training_array[]=array('training_link'=>'speed','training_id'=>'speed','training_name'=>'agility');
          $training_array[]=array('training_link'=>'speed','training_id'=>'speed','training_name'=>'power');
          $training_array[]=array('training_link'=>'speed','training_id'=>'speed','training_name'=>'flexibility');
          foreach($training_array as $training_list){
        ?>
          <?php $training_link='practice/team/player/'; require ($_SERVER['SCOUTDB'].'module/training-list.php')?>
        <?php } ?>
      </div>
      
      <div class="training-container">Technical Practice</div>
      <div class="training-list">
        <?php 
          $training_array = array();
          $training_array[]=array('training_link'=>'speed','training_id'=>'shooting','training_name'=>'dribble');
          $training_array[]=array('training_link'=>'speed','training_id'=>'shooting','training_name'=>'passing');
          $training_array[]=array('training_link'=>'speed','training_id'=>'shooting','training_name'=>'shooting');
          $training_array[]=array('training_link'=>'speed','training_id'=>'shooting','training_name'=>'control');
          $training_array[]=array('training_link'=>'speed','training_id'=>'shooting','training_name'=>'turning');
          $training_array[]=array('training_link'=>'speed','training_id'=>'shooting','training_name'=>'forward moves');
          $training_array[]=array('training_link'=>'speed','training_id'=>'shooting','training_name'=>'ball mastery');
          foreach($training_array as $training_list){
        ?>
          <?php $training_link='practice/team/player/'; require ($_SERVER['SCOUTDB'].'module/training-list.php')?>
        <?php } ?>
      </div>
    </section>
	
  </span>
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>