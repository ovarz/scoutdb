<?php 
  $page='pagelist';
  $channel='pagelist';
  $backto_link='home.php'; $backto_label='Home';
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
	.icon-list{display:flex; flex-wrap:wrap;}
	.icon-link{display:flex; align-items:center; padding:var(--size-3); background-color:rgb(var(--color-border) / 13%); border-radius:var(--rounded-2);
	margin-right:var(--size-2); margin-top:var(--size-2);}
	.icon-link:hover{background-color:var(--color-default-3); color:var(--color-default-2); fill:var(--color-default-2);}
	.icon-link svg{width:auto; height:18px; margin-right:var(--size-3);}
	.icon-name{text-align:center;}
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
          <li><a class="pagelist-row" href="practice/">Halaman Daftar Team</a></li>
          <li><a class="pagelist-row" href="practice/team/">Halaman Daftar Player</a></li>
          <li><a class="pagelist-row" href="practice/team/player/">Halaman Daftar Training</a></li>
          <li><a class="pagelist-row" href="practice/team/player/speed/">Halaman Detail Training</a></li>
          <li><a class="pagelist-row" href="practice/team/player/speed/step1.php">Halaman Mulai Training</a></li>
          <li><a class="pagelist-row" href="practice/team/player/speed/step2.php">Halaman Sedang Training</a></li>
          <li><a class="pagelist-row" href="practice/team/player/speed/step3.php">Halaman Selesai Training</a></li>
          <li><a class="pagelist-row" href="practice/team/player/speed/result.php">Halaman Hasil Training</a></li>
        </ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Video Player</div>  
        <ul>
          <li><a class="pagelist-row" href="video-player/">Halaman Daftar Video</a></li>
          <li><a class="pagelist-row" href="video-player/detail.php">Halaman Detail Video</a></li>
        </ul>
      </li>
      <li>
        <div class="pagelist-row">Icon</div>  
        <div class="icon-list">
		  <?php 
            $icon_array = array();
            $icon_array[]=array('icon_id'=>'back');
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
            $icon_array[]=array('icon_id'=>'section-title');
            $icon_array[]=array('icon_id'=>'setting');
            $icon_array[]=array('icon_id'=>'star-filled');
            $icon_array[]=array('icon_id'=>'star-outline');
            $icon_array[]=array('icon_id'=>'switch');
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