<header>
  <span class="width-max">
    <div class="header-left">
	  <button title="Menu" class="header-link header-menu content_center">
	    <?php require ($_SERVER['SCOUTDB'].'img/icon/menu.svg')?>
	  </button>
	  <a aria-label="Home" title="Home" class="header-link header-logo content_center" href="home.php">
        <picture>
          <source srcset="img/logo.webp" type="image/webp">
          <source srcset="img/logo.png">
          <img alt="Logo ScoutDB" src="img/logo.png" width="128" height="34">
        </picture>
	  </a>
	</div>
	<div class="header-right">
      <?php if($channel == 'practice') { ?>
	  <a aria-label="Report" title="Report" class="header-link header-report content_center" href="report/">
        <div class="button-dummy">
	      <?php require ($_SERVER['SCOUTDB'].'img/icon/report.svg')?>
          <span>Report</span>
        </div>
	  </a>
      <?php } ?>
	  <button title="Sync" class="header-link header-sync content_center">
	    <?php require ($_SERVER['SCOUTDB'].'img/icon/sync.svg')?>
	  </button>
	  <button title="Notification" class="header-link header-notif open-float content_center">
	    <?php require ($_SERVER['SCOUTDB'].'img/icon/notification.svg')?>
	  </button>
	  <button title="Setting" class="header-link header-setting open-float content_center">
	    <?php require ($_SERVER['SCOUTDB'].'img/icon/setting.svg')?>
	  </button>
	  <button title="Logout" class="header-link header-logout open-popup content_center">
	    <?php require ($_SERVER['SCOUTDB'].'img/icon/logout.svg')?>
	  </button>
	</div>
  </span>
</header>