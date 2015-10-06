jQuery(document).ready(function($){
  var $body         = $('.homePage'),
      $nav          = $('.main-nav'),
      $menu_trigger = $('.clickable'),
      $nav_ul       = $('.nav-ul'),
      $nav_i        = $('.nav-items'),
      $lines        = $('.lines');

  $menu_trigger.on('click', function(event){
    event.preventDefault();

    $body.toggleClass('nav-open'),
    $nav.toggleClass('nav-open'),
    $nav_ul.toggleClass('nav-open'),
    $nav_i.toggleClass('nav-open'),
    $lines.toggleClass('nav-open');
  });

});
