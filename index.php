<?php 
  $page='welcome';
  $channel='welcome';
  require ('inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<div class="rancak-container content_center">

  <style><?php require ($_SERVER['SCOUTDB'].'css/login.css')?></style>
  
  <div class="login-container">
    <div class="login-logo content_center">
      <picture>
        <source srcset="img/logo.webp" type="image/webp">
        <source srcset="img/logo.png">
        <img alt="Logo ScoutDB" src="img/logo.png" width="128" height="34">
      </picture>
	</div>
    <div class="login-intro">
      <p>Selamat datang di ScoutBD.</p>
      <p>Silakan klik tombol dibawah ini untuk sign in.</p>
    </div>
	<button title="Sign in" class="login-button" onclick="location.href='home.php';">
	  <div class="login-button-icon"><?php require ($_SERVER['SCOUTDB'].'img/icon/google.svg')?></div>
	  <div class="login-button-label">Sign in with Google</div>
	</button>
  </div>
  
</div>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>