<link rel="stylesheet" type="text/css" href="/wp-content/themes/Beehive/css/startseite.css">

<?php wp_head(); ?>
<div class="home-top-container">
  <div class="container">
    <div class="row">
      <div class="outer">
        <div class="inner-startseite">
          <h1>Beehive Management</h1>
          <small>Rettet die Bienen! Rettet die Welt!</small><br />
          <div class="btn-wrapper">
            <a href="?page=projektbeschreibung" class="main-explore-btn">Erforschen</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="slideshow-abdunkeln">
  <?php do_action('slideshow_deploy','38');?>
</div>
<?php wp_footer(); ?>

<div class="startseite-wrapper container">
  <div class="row">
    <div class="kleine-container col-md-3 col-sm-6 col-xs-12 projektbeschreibung">
      <div class="top-layer">
        <div class="inner-content">
          <h3>Über unser Projekt</h3>
          <p>Erfahre mehr über unser Projekt.</p>
          <a class="explore-btn" href="?page=projektbeschreibung">Erforschen</a>
        </div>
      </div>
    </div>
    <div class="kleine-container col-md-3 col-sm-6 col-xs-12 team">
      <div class="top-layer">
        <div class="inner-content">
          <h3>Wer ist beteiligt?</h3>
          <p>Lerne uns und unsere Zuständigkeiten kennen.</p>
          <a class="explore-btn" href="?page=team">Erforschen</a>
        </div>
      </div>
    </div>
    <div class="kleine-container col-md-3 col-sm-6 col-xs-12 fortschritt">
      <div class="top-layer">
        <div class="inner-content">
          <h3>Fortschritt</h3>
          <p>Willst du wissen wie weit wir schon sind? Folge uns!</p>
          <a class="explore-btn" href="?page=ergebnisse">Erforschen</a>
        </div>
      </div>
    </div>
    <div class="kleine-container col-md-3 col-sm-6 col-xs-12 feedback">
      <div class="something">

      </div>
      <div class="top-layer">
        <div class="inner-content">
          <h3>Gib uns ein Feedback!</h3>
          <p>Hast du noch offene Fragen, Kritik oder Ideen. Lass es uns wissen!</p>
          <a class="explore-btn" href="?page=feedback">Erforschen</a>
        </div>
      </div>
    </div>
  </div>
</div>
