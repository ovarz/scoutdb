<menu>
  <a aria-label="<?php echo $random_username[array_rand($random_username)]; ?>" title="<?php echo $random_username[array_rand($random_username)]; ?>" 
  class="side-profile" href="profile/">
    <div class="side-profile-photo content_center">
	  <div class="side-profile-photoframe flex_ori thumb-loading">
	    <img alt="img_title" class="lazyload" data-original="img/sample/profile-photo.jpg" />
	  </div>
	</div>
	<h1 class="side-profile-name"><?php echo $random_username[array_rand($random_username)]; ?></h1>
  </a>
  
  <div class="menu-container">
    <a aria-label="Back To <?php echo $backto_label; ?>" title="Back To <?php echo $backto_label; ?>" class="menu-link content_center"
	href="<?php echo $backto_link; ?>">
	  <div class="menu-link-icon content_center">
	    <?php require ($_SERVER['SCOUTDB'].'img/icon/back.svg')?>
	  </div>
	  <div class="menu-link-label content_center">Back</div>
	</a>
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