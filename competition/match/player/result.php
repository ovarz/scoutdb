<?php 
  $page='dashboard';
  $menu='min';
  $channel='competition';
  $subchannel='player-scouting';
  $report='no';
  $report_link='';
  $report_label='';
  $backto_link='competition/match/'; $backto_label='player';
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-competition.php')?>
<link rel="stylesheet" type="text/css" href="css/practice.css?<?php echo $anticache; ?>"/>
<link rel="stylesheet" type="text/css" href="css/competition.css?<?php echo $anticache; ?>"/>
<div class="rancak-container ">
  <span class="width-max">

    <section aria-label="Section Practice" class="section-container">
      <div class="practice-tutorial practice-tutorial-process">
        <div class="practice-tutorial-left">
          <div class="practice-tutorial-sticky">
            <?php require ($_SERVER['SCOUTDB'].'module/practice-player-profile.php')?>
            <div class="ptl-box competition-match-info">
              <b class="ptl-cmi-title">Scouting Event</b>
              <ul class="ptl-cmi-row">
                <li class="ptl-cmi-label">Competition</li>
                <li class="ptl-cmi-data">Competition Name</li>
              </ul>
              <ul class="ptl-cmi-row">
                <li class="ptl-cmi-label">Match</li>
                <li class="ptl-cmi-data">Team Home vs Team Away</li>
              </ul>
              <ul class="ptl-cmi-row">
                <li class="ptl-cmi-label">Stage / Round</li>
                <li class="ptl-cmi-data"><?php echo $random_competition[array_rand($random_competition)]; ?> / <?php echo $random_round[array_rand($random_round)]; ?></li>
              </ul>
              <ul class="ptl-cmi-row">
                <li class="ptl-cmi-label">Date</li>
                <li class="ptl-cmi-data">00 September 0000</li>
              </ul>
              <ul class="ptl-cmi-row">
                <li class="ptl-cmi-label">Playing Time</li>
                <li class="ptl-cmi-data">000:00</li>
              </ul>
            </div>
            <div class="ptl-box competition-match-action">
              <button title="Save" class="btn ptl-cma-button ptl-cma-save">
                Save
              </a>
              <button title="Edit" class="btn ptl-cma-button ptl-cma-edit" onclick="location.href='competition/match/player/';">
                Edit
              </a>
              <button title="Delete" class="btn ptl-cma-button ptl-cma-delete" onclick="location.href='competition/match/';">
                Delete
              </a>
              <button title="Submit" class="btn ptl-cma-button ptl-cma-submit" onclick="location.href='competition/';">
                Submit
              </a>
            </div>
		  </div>
        </div>
		
		
		
        <div class="practice-tutorial-right">
		  <div class="ptl-box competition-result-info">
            <b class="ptl-cmi-title">Scouting Result</b>
            <?php 
              $cri_array = array();
              $cri_array[]=array('cri_label'=>'Short Pass');
              $cri_array[]=array('cri_label'=>'Goal');
              $cri_array[]=array('cri_label'=>'Jump');
              $cri_array[]=array('cri_label'=>'Long Pass');
              $cri_array[]=array('cri_label'=>'Shot');
              foreach($cri_array as $cri_list){
            ?>
              <ul class="ptl-cmi-row">
                <li class="ptl-cmi-label"><?php echo($cri_list['cri_label'])?></li>
                <li class="ptl-cmi-data"><?php echo rand(1,99); ?></li>
              </ul>
            <?php } ?>
          </div>   
		  
		  
		  
          <div class="competition-result-timeline">
            <b class="ptl-cmi-title">Timeline</b>
            <?php for ($i=1; $i <= 15 ; $i++) { ?>
              <ul class="ptl-cmi-row">
                <li class="ptl-cmi-label">00:00</li>
                <li class="ptl-cmi-data">
				  <?php 
				    $player_timeline=array("Control","Short Pass","Long Pass","Shot","Through Pass","Cross Pass","Tackle","Jump");
				    echo $player_timeline[array_rand($player_timeline)]; 
				  ?>
				</li>
              </ul>
            <?php } ?>
          </div> 
        </div>
      </div>
    </section>
	
  </span>
</div>
<script defer rancak-hold="js/competition.js"></script>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>