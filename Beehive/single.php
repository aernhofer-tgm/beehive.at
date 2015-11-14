<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Beehive</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href='https://fonts.googleapis.com/css?family=Roboto:200' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/Beehive/external/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/Beehive/css/navbar.css">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/Beehive/css/footer.css">

  <script src="/wp-content/themes/Beehive/external/jquery/jquery.js"></script>
  <script src="/wp-content/themes/Beehive/external/bootstrap/js/bootstrap.js"></script>
</head>

<body>

  <nav class="main-nav container">
    <div class="main-nav-inner-container row">
      <div class="menu-trigger">
        <span class="clickable">≡</span>
      </div>
      <a href="../?page=startseite"><img class="l-collapsed" src="/wp-content/themes/Beehive/images/logo/Beehive-Logo.png"></a>
        <ul class="col-xs-12 nav-ul">
          <li class="nav-items first"><a style="cursor:default;"><img class="logo" src="/wp-content/themes/Beehive/images/logo/Beehive-Logo.png" /></a></li>
          <li class="nav-items"><a href="../?page=startseite">Startseite</a></li>
          <hr class="lines" />
          <li class="nav-items"><a href="../?page=projektbeschreibung">Projektbeschreibung</a></li>
          <hr class="lines" />
          <li class="nav-items"><a href="../?page=team">Team</a></li>
          <hr class="lines" />
          <li class="nav-items"><a href="../?page=ergebnisse">Fortschritt</a></li>
          <hr class="lines" />
          <li class="nav-items"><a href="../?page=feedback">Feedback</a></li>
          <hr class="lines" />
          <!--<li class="nav-items"><a href="../?page=partner">Partner</a></li>
          <hr class="lines" />-->
        </ul>
      </div>
  </nav>
  <script src="/wp-content/themes/Beehive/scripts/menu-trigger.js" defer></script>
<? wp_head(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/Beehive/css/ergebnis.css">
<div class="top-page-container">
  <div class="top-page-container-inner">
    <div class="background-layer">
      <div class="top-layer">
        <div class="top-page-container-inner-content">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="big-container">
  <div class="container" style="margin-top:50px;">
    <div class="container col-md-12">
      <div class="content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <footer class="footer container">
    <div class="row">
    <hr />
    <div class="col-md-4 col-sm-4 col-xs-6">
      <a href="../?page=feedback"><p class="footer_links">Feedback</p></a>
      <a href="../?page=impressum"><p class="footer_links">Impressum</p></a>
      <a href="../?page=ergebnisse"><p class="footer_links">Dokumentation</p></a>
      <a href="../?page=projektbeschreibung"><p class="footer_links">FAQ</p></a>
    </div>
    <div class="col-md-4 col-sm-4 col-sm-push-4 col-xs-6">
      <div style="float:right;"><img id="it_logo" src="/wp-content/themes/Beehive/images/logo/it_logo.png" style="width:200px"></div>
    </div>
    <div class="col-md-4 col-sm-4 col-sm-pull-4 col-xs-12">
      <p class="copyright">Copyright © Beehive Management 2015 ® All rights reserved</p>
    </div>
    </div>
  </footer>
</div>
<?php endwhile; endif; ?>
<? wp_footer(); ?>
