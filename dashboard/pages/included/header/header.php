<header>

  <?php if(isset($_SESSION['id'])){ ?>
    <button class="btn-burger"><i class="DGfi-menu"></i></button>
  <?php } ?>

  <ul class="nav-contain-right btn-choose-lang" style="">
    <li id="google_translate_element" class="btn-google-translate"></li>
  </ul>

  <?php if(!isset($_SESSION['id'])){ ?>
    <a href="../login">
      <button class="btn btn-log btn-login">Log in</button>
    </a>

  <?php }else{ ?>
    <a href="<?php echo _ROOT_PATH."dashboard/treatment/logout.php"; ?>">
      <button class="btn btn-log btn-logout">Log out</button>
    </a>
  <?php } ?>
</header>

<?php if(isset($_SESSION['id'])){ ?>
  <div class="mobile-content-menu">

    <a href="../home">
      <div class="item-menu mobile-item-menu menu-home"><i class="DGfi-home icon-menu"></i><span class="txt-menu"> Home</span></div>
    </a>
    <a href="../enrolment">
      <div class="item-menu mobile-item-menu menu-enrolment"><i class="DGfi-profile icon-menu"></i><span class="txt-menu no_translate"> Enrollment</span></div>
    </a>
    <a href="../ovc">
      <div class="item-menu mobile-item-menu menu-ovc"><i class="DGfi-file-text2 icon-menu"></i><span class="txt-menu no_translate"> OVC</span></div>
    </a>

    <a href="../document">
      <div class="item-menu mobile-item-menu menu-document"><i class="DGfi-file-excel icon-menu"></i><span class="txt-menu"> Documents</span></div>
    </a>
    <div class="item-menu mobile-item-menu"><i class="DGfi-cloud-upload icon-menu"></i><span class="txt-menu"> Cloud</span></div>
    <div class="item-menu mobile-item-menu"><i class="DGfi-stats-bars icon-menu"></i><span class="txt-menu"> Statistics</span></div>
    <div class="item-menu mobile-item-menu menu-users"><i class="DGfi-users icon-menu"></i><span class="txt-menu"> Users</span></div>
  </div>
  <div class="content-menu">

    <a href="../home">
      <div class="item-menu menu-home"><i class="DGfi-home icon-menu"></i><span class="txt-menu"> Home</span></div>
    </a>
    <a href="../enrolment">
      <div class="item-menu menu-enrolment"><i class="DGfi-profile icon-menu"></i><span class="txt-menu no_translate"> Enrollment</span></div>
    </a>
    <a href="../ovc">
      <div class="item-menu menu-ovc"><i class="DGfi-file-text2 icon-menu"></i><span class="txt-menu no_translate"> OVC</span></div>
    </a>

    <a href="../document">
      <div class="item-menu menu-document"><i class="DGfi-file-excel icon-menu"></i><span class="txt-menu"> Documents</span></div>
    </a>
    <div class="item-menu"><i class="DGfi-cloud-upload icon-menu"></i><span class="txt-menu"> Cloud</span></div>
    <div class="item-menu"><i class="DGfi-stats-bars icon-menu"></i><span class="txt-menu"> Statistics</span></div>
    <div class="item-menu menu-users"><i class="DGfi-users icon-menu"></i><span class="txt-menu"> Users</span></div>
    <input type="hidden" class="state" value="0">
  </div>

<?php } ?>

<!-- Debut du code du traducteur de site Web de Google -->
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement(
    {
      pageLanguage: 'fr',
      includedLanguages: 'fr,en',
      multilanguagePage: true,
      autoDisplay: false
    },
    'google_translate_element'
    );
  }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- Fin du code du traducteur de site Web de Google -->
