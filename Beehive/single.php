<?php get_header(); ?>
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
  <?php get_footer(); ?>
</div>
<?php endwhile; endif; ?>
<? wp_footer(); ?>
