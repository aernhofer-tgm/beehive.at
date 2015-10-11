jQuery(document).ready(function($) {
 var $click = $('.moremore-info'),
      $content = $('.more-info'),
      $plus    = $('.plus');

     $click.on('click', function(event) {
          event.preventDefault();
          $content.toggleClass('openLegs'),
          $plus.toggleClass('rotateLegs');
     });
});
