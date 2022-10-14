<?php
  $submenu_competition_array = array();
  $submenu_competition_array[]=array('submenu_competition_label'=>'Player Scouting','submenu_competition_link'=>'competition/');
  $submenu_competition_array[]=array('submenu_competition_label'=>'Match Statistics','submenu_competition_link'=>'competition/match-statistic/');
  $submenu_competition_array[]=array('submenu_competition_label'=>'In Game Administration','submenu_competition_link'=>'competition/');
  $submenu_competition_array[]=array('submenu_competition_label'=>'Report','submenu_competition_link'=>'competition/');
?>

<nav class="submenu">
  <?php foreach($submenu_competition_array as $submenu_competition_list){ ?>
  <a aria-label="<?php echo($submenu_competition_list['submenu_competition_label'])?>" title="<?php echo($submenu_competition_list['submenu_competition_label'])?>" 
  class="submenu-link content_center" href="competition/<?php echo($submenu_competition_list['submenu_competition_link'])?>">
    <?php echo($submenu_competition_list['submenu_competition_label'])?>
  </a>
  <?php } ?>
</nav>