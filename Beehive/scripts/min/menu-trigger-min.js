jQuery(document).ready(function($){var n=$(".homePage"),e=$(".main-nav"),a=$(".clickable"),l=$(".nav-ul"),o=$(".nav-items"),s=$(".lines");a.on("click",function(a){a.preventDefault(),n.toggleClass("nav-open"),e.toggleClass("nav-open"),l.toggleClass("nav-open"),o.toggleClass("nav-open"),s.toggleClass("nav-open")})});