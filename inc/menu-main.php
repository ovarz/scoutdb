<menu>
  <div class="menu-container">
    <?php foreach($menu_main_array as $menu_main_list){ ?>
    <a aria-label="<?php echo($menu_main_list['menu_main_label'])?>" title="<?php echo($menu_main_list['menu_main_label'])?>" 
	href="<?php echo($menu_main_list['menu_main_link'])?>"
	class="menu-link <?php if($channel == $menu_main_list['menu_main_id']) { ?>menu-curr<?php } ?> content_center">
	  <div class="menu-link-icon content_center">
	    <?php require ($_SERVER['SCOUTDB'].'img/icon/menu-'.$menu_main_list['menu_main_id'].'.svg')?>
	  </div>
	  <div class="menu-link-label content_center"><?php echo($menu_main_list['menu_main_label'])?></div>
	</a>
	<?php } ?>
  </div>
</menu>