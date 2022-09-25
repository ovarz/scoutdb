<?php 
  $page='pagelist';
  $channel='pagelist';
  require ('inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/header.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/menu-main.php')?>
<div class="rancak-container">

  <style>
    .pagelist ul{padding-left:18px;}
    .pagelist > ul{list-style:disc;}
    .pagelist > ul > li > ul{list-style:circle;}
    .pagelist-row{padding:7px 0; display:block;}
	.icon-list{display:grid; grid-template-columns:repeat(auto-fit, minmax(96px,1fr)); grid-gap:var(--size-2);}
	.icon-link{padding:var(--size-3); background-color:rgb(var(--color-border) / 13%); border-radius:var(--rounded-2);}
	.icon-link:hover{background-color:var(--color-default-3); color:var(--color-default-2); fill:var(--color-default-2);}
	.icon-link svg{width:auto; height:24px;}
	.icon-name{text-align:center; margin-top:var(--size-2);}
  </style>

  <div class="pagelist">
    <ul>
      <li>
        <a class="pagelist-row" href="">Halaman Login</a>
      </li>
      <li>
        <a class="pagelist-row" href="home.php">Halaman Daftar Menu</a>
      </li>
      <li>
        <div class="pagelist-row">Halaman Practice</div>  
        <ul>
          <li><a class="pagelist-row" href="practice/">Halaman Utama Practice</a></li>
        </ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Scout by Video</div>  
        <ul>
          <li><a class="pagelist-row" href="scout-video/">Halaman Daftar Video</a></li>
          <li><a class="pagelist-row" href="scout-video/detail.php">Halaman Detail Video</a></li>
        </ul>
      </li>
      <li>
        <div class="pagelist-row">Icon</div>  
        <div class="icon-list">
		  <?php 
            $icon_array = array();
            $icon_array[]=array('icon_id'=>'calendar');
            $icon_array[]=array('icon_id'=>'dropdown');
            $icon_array[]=array('icon_id'=>'google');
            $icon_array[]=array('icon_id'=>'home');
            $icon_array[]=array('icon_id'=>'left');
            $icon_array[]=array('icon_id'=>'left-double');
            $icon_array[]=array('icon_id'=>'logout');
            $icon_array[]=array('icon_id'=>'menu');
            $icon_array[]=array('icon_id'=>'menu-competition');
            $icon_array[]=array('icon_id'=>'menu-free-scouting');
            $icon_array[]=array('icon_id'=>'menu-players');
            $icon_array[]=array('icon_id'=>'menu-practice');
            $icon_array[]=array('icon_id'=>'menu-scout-video');
            $icon_array[]=array('icon_id'=>'menu-video-player');
            $icon_array[]=array('icon_id'=>'notification');
            $icon_array[]=array('icon_id'=>'play-circle');
            $icon_array[]=array('icon_id'=>'report');
            $icon_array[]=array('icon_id'=>'right');
            $icon_array[]=array('icon_id'=>'right-double');
            $icon_array[]=array('icon_id'=>'search');
            $icon_array[]=array('icon_id'=>'setting');
            $icon_array[]=array('icon_id'=>'sync');
		    foreach($icon_array as $icon_list){ 
		  ?>
		  <a class="icon-link" href="img/icon/<?php echo($icon_list['icon_id'])?>.svg" target="_blank">
		    <div class="icon-display content_center">
			  <?php require ($_SERVER['SCOUTDB'].'img/icon/'.$icon_list['icon_id'].'.svg')?>
			</div>
			<div class="icon-name"><?php echo($icon_list['icon_id'])?></div>
		  </a>
		  <?php } ?>
		</div>
      </li>
    </ul>
  </div>
  
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>