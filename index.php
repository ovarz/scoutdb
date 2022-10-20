<?php 
  $page='welcome';
  $menu='full';
  $channel='welcome';
  $report='no';
  $report_link='';
  $report_label='';
  $backto_link=''; $backto_label='';
  require ('inc/base.php')
?>
<?php require ($_SERVER['SCOUTDB'].'inc/data.php')?>
<?php require ($_SERVER['SCOUTDB'].'inc/meta.php')?>
<style>
  <?php require ($_SERVER['VIAHUB'].'css/slideshow.css')?>
  <?php require ($_SERVER['SCOUTDB'].'css/login.css')?>
</style>
<section aria-label="Slideshow" class="login-slideshow">
  <div class="login-slidebox">
    <div class="login-slidebox-image flex_ori">
      <img alt="img_title" class="lazyload" data-original="img/slide-1.jpg" />
    </div>
	<div class="login-slidebox-content">
	  <b>Record statistics</b> for real-time matchs
	</div>
  </div>
  <div class="login-slidebox">
    <div class="login-slidebox-image flex_ori">
      <img alt="img_title" class="lazyload" data-original="img/slide-2.jpg" />
    </div>
	<div class="login-slidebox-content">
	  <b>Record statistics</b> in a pre-recorded video
	</div>
  </div>
  <div class="login-slidebox">
    <div class="login-slidebox-image flex_ori">
      <img alt="img_title" class="lazyload" data-original="img/slide-3.jpg" />
    </div>
	<div class="login-slidebox-content">
	  <b>Record statistics</b> for your custom matchs</b>
	</div>
  </div>
</section>
  
  
  
<div class="rancak-container content_center">

  <section aria-label="Sign In" class="login-container">
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
  </section>
  
</div>
<script defer src="js/slideshow.js"></script>
<script defer>
$(document).ready(function(){
  $('.login-slideshow').slick({
	lazyLoad:'ondemand',
	dots:true,
	infinite:true,
	slidesToShow:1,
	slidesToScroll:1,
	autoplay:false,
	swipeToSlide:true,
	arrows:false,
	autoplaySpeed:5000,
  });
});
</script>
<?php require ($_SERVER['SCOUTDB'].'inc/base-bottom.php')?>