<?php 
  $page='welcome';
  $channel='home';
  require ('inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<style><?php require ($_SERVER['SCOUTDB'].'css/pagemenu.css')?></style>
<div class="rancak-container content_center">

  <section aria-label="Video Cover" class="video-cover"></section>
  
  
  
  <section aria-label="Daftar Menu" class="pagemenu-container">
    <div class="pagemenu-logo content_center">
      <picture>
        <source srcset="img/logo.webp" type="image/webp">
        <source srcset="img/logo.png">
        <img alt="Logo ScoutDB" src="img/logo.png" width="128" height="34">
      </picture>
	</div>
	<div class="pagemenu-list">
      <?php foreach($menu_main_array as $menu_main_list){ ?>
      <a aria-label="<?php echo($menu_main_list['menu_main_label'])?>" title="<?php echo($menu_main_list['menu_main_label'])?>" 
      href="<?php echo($menu_main_list['menu_main_link'])?>"
      class="pagemenu-link content_center">
        <div class="pagemenu-link-icon content_center">
          <?php require ($_SERVER['SCOUTDB'].'img/icon/menu-'.$menu_main_list['menu_main_id'].'.svg')?>
        </div>
        <div class="pagemenu-link-label content_center"><?php echo($menu_main_list['menu_main_label'])?></div>
      </a>
      <?php } ?>
	</div>
  </section>
  
</div>
<script>
$(window).on('load',function(){
  $('.video-cover').append("<img alt=\"Cover Menu\" src=\"img/cover-menu.jpg\" width=\"1920\" height=\"1080\">");
}); 
</script>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>