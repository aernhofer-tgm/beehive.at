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
          <li class="nav-items"><a href="../?page=ergebnisse">Ergebnisse</a></li>
          <hr class="lines" />
          <li class="nav-items"><a href="../?page=feedback">Feedback</a></li>
          <hr class="lines" />
          <!--<li class="nav-items"><a href="../?page=partner">Partner</a></li>
          <hr class="lines" />-->
        </ul>
      </div>
  </nav>
  <script src="/wp-content/themes/Beehive/scripts/menu-trigger.js" defer></script>

  <div class="col-md-6 col-md-push-3">
    <h1 style="text-align:center;font-size:100px;margin-top:60px;">Oops!</h1>
    <h3 style="text-align:center;margin-top:50px;">Error 404 - File Not Found</h1>
    <p style="text-align:center;">
      Sorry, the file you are trying to access has been moved or does not exist!
    </p>
    <form style="text-align:center">
      <a class="btn btn-success" style="width:130px;margin-right:3px;" onClick="history.go(-1);return true;">Go Back</a>
      <a class="btn btn-default" style="width:130px;margin-left:3px;" onClick="alert('Thank you for your support!\nA report has been sent to our team. :)');">Contact Support</a>
    </form>
  </div>
<?php include(__DIR__."/pages/section_footer.php"); ?>
