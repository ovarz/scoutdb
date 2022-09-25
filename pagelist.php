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
    </ul>
  </div>
  
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/footer.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>