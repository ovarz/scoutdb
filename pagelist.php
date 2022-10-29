<?php 
  $page='pagelist';
  $menu='full';
  $channel='pagelist';
  $report='no';
  $report_link='';
  $report_label='';
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
	.image-list{display:flex; flex-wrap:wrap;}
	.image-link{padding:var(--size-3); border:1px solid rgb(var(--color-border) / 13%); border-radius:var(--rounded-2);
	margin-right:var(--size-2); margin-top:var(--size-2);}
	.image-display img{height:89px;}
	.image-name{text-align:center; margin-top:var(--size-2);}
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
        <div class="pagelist-row">Halaman Competition</div>  
        <ul>
          <li><a class="pagelist-row" href="competition/">Halaman Player Scouting - Pilih Pertandingan</a></li>
          <li><a class="pagelist-row" href="competition/match/">Halaman Player Scouting - Pilih Pemain</a></li>
          <li><a class="pagelist-row" href="competition/match/player/">Halaman Player Scouting - Detail</a></li>
        </ul>
      </li>
      <li>
        <div class="pagelist-row">Halaman Practice</div>  
        <ul>
          <li><a class="pagelist-row" href="practice/">Halaman Daftar Team</a></li>
          <li><a class="pagelist-row" href="practice/team/">Halaman Daftar Player</a></li>
          <li><a class="pagelist-row" href="practice/team/player/">Halaman Daftar Training</a></li>
		  
          <li><a class="pagelist-row" href="practice/team/player/power/">Halaman Training Numeric</a></li>
          <li><a class="pagelist-row" href="practice/team/player/power/step1.php">Halaman Training Numeric - Input Skor</a></li>
          <li><a class="pagelist-row" href="practice/team/player/power/result.php">Halaman Training Numeric - Hasil</a></li>
		  
          <li><a class="pagelist-row" href="practice/team/player/speed/">Halaman Training Timer</a></li>
          <li><a class="pagelist-row" href="practice/team/player/speed/step1.php">Halaman Training Timer - Mulai</a></li>
          <li><a class="pagelist-row" href="practice/team/player/speed/step2.php">Halaman Training Timer - Berlangsung</a></li>
          <li><a class="pagelist-row" href="practice/team/player/speed/step3.php">Halaman Training Timer - Selesai</a></li>
          <li><a class="pagelist-row" href="practice/team/player/speed/result.php">Halaman Training Timer - Hasil</a></li>
		  
          <li><a class="pagelist-row" href="practice/team/player/endurance/">Halaman Training Bleep</a></li>
          <li><a class="pagelist-row" href="practice/team/player/endurance/step1.php">Halaman Training Bleep - Mulai</a></li>
          <li><a class="pagelist-row" href="practice/team/player/endurance/step2.php">Halaman Training Bleep - Berlangsung</a></li>
          <li><a class="pagelist-row" href="practice/team/player/endurance/step3.php">Halaman Training Bleep - Selesai</a></li>
          <li><a class="pagelist-row" href="practice/team/player/endurance/result.php">Halaman Training Bleep - Hasil</a></li>
		  
          <li><a class="pagelist-row" href="practice/team/player/timer-point/">Halaman Training Timer & Poin</a></li>
          <li><a class="pagelist-row" href="practice/team/player/timer-point/step1.php">Halaman Training Timer & Poin - Mulai</a></li>
          <li><a class="pagelist-row" href="practice/team/player/timer-point/step2.php">Halaman Training Timer & Poin - Berlangsung</a></li>
          <li><a class="pagelist-row" href="practice/team/player/timer-point/step3.php">Halaman Training Timer & Poin - Selesai</a></li>
          <li><a class="pagelist-row" href="practice/team/player/timer-point/result.php">Halaman Training Timer & Poin - Hasil</a></li>
		  
          <li><a class="pagelist-row" href="practice/team/player/speed/finish.php">Halaman Detail Hasil Training</a></li>
          <li><a class="pagelist-row" href="practice/team/player/result-player.php">Halaman Hasil Training - Per Pemain</a></li>
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
            $icon_array[]=array('icon_id'=>'bleep-fail');
            $icon_array[]=array('icon_id'=>'bleep-success');
            $icon_array[]=array('icon_id'=>'calendar');
            $icon_array[]=array('icon_id'=>'card');
            $icon_array[]=array('icon_id'=>'circle-no');
            $icon_array[]=array('icon_id'=>'circle-yes');
            $icon_array[]=array('icon_id'=>'close');
            $icon_array[]=array('icon_id'=>'delete');
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
            $icon_array[]=array('icon_id'=>'minus');
            $icon_array[]=array('icon_id'=>'notification');
            $icon_array[]=array('icon_id'=>'play-circle');
            $icon_array[]=array('icon_id'=>'plus');
            $icon_array[]=array('icon_id'=>'report');
            $icon_array[]=array('icon_id'=>'right');
            $icon_array[]=array('icon_id'=>'right-double');
            $icon_array[]=array('icon_id'=>'run');
            $icon_array[]=array('icon_id'=>'search');
            $icon_array[]=array('icon_id'=>'section-title');
            $icon_array[]=array('icon_id'=>'send');
            $icon_array[]=array('icon_id'=>'setting');
            $icon_array[]=array('icon_id'=>'stand');
            $icon_array[]=array('icon_id'=>'star-filled');
            $icon_array[]=array('icon_id'=>'star-outline');
            $icon_array[]=array('icon_id'=>'switch');
            $icon_array[]=array('icon_id'=>'sync');
            $icon_array[]=array('icon_id'=>'upload');
            $icon_array[]=array('icon_id'=>'walk');
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
      <li style="margin-top:var(--size-3);">
        <div class="pagelist-row">Image</div>  
        <div class="image-list">
		  <?php 
            $image_array = array();
            $image_array[]=array('image_file'=>'logo.png','image_name'=>'Logo');
            $image_array[]=array('image_file'=>'profile-photo.jpg','image_name'=>'Default Profile Picture');
            $image_array[]=array('image_file'=>'slide-1.jpg','image_name'=>'Login Slide 1');
            $image_array[]=array('image_file'=>'slide-2.jpg','image_name'=>'Login Slide 2');
            $image_array[]=array('image_file'=>'slide-3.jpg','image_name'=>'Login Slide 3');
            $image_array[]=array('image_file'=>'cover-menu.jpg','image_name'=>'Home Cover Background');
		    foreach($image_array as $image_list){ 
		  ?>
		  <a class="image-link" href="img/<?php echo($image_list['image_file'])?>" target="_blank">
		    <div class="image-display content_center">
			  <img alt="img_title" class="lazyload" data-original="img/<?php echo($image_list['image_file'])?>">
			</div>
			<div class="image-name"><?php echo($image_list['image_name'])?></div>
		  </a>
		  <?php } ?>
		</div>
      </li>
    </ul>
  </div>
  
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>