!function(e,n,t,o){e.fn.pagepiling=function(i){function a(n){var t=e(".pp-section.active").index(".pp-section");return n=n.index(".pp-section"),t>n?"up":"down"}function s(n,t){var o={destination:n,animated:t,activeSection:e(".pp-section.active"),anchorLink:n.data("anchor"),sectionIndex:n.index(".pp-section"),toMove:n,yMovement:a(n),leavingSection:e(".pp-section.active").index(".pp-section")+1};o.activeSection.is(n)||("undefined"==typeof o.animated&&(o.animated=!0),"undefined"!=typeof o.anchorLink&&u(o.anchorLink,o.sectionIndex),o.destination.addClass("active").siblings().removeClass("active"),o.sectionsToMove=l(o),"down"===o.yMovement?(o.translate3d="vertical"!==U.direction?"translate3d(-100%, 0px, 0px)":"translate3d(0px, -100%, 0px)",o.scrolling="-100%",U.css3||o.sectionsToMove.each(function(n){n!=o.activeSection.index(".pp-section")&&e(this).css(d(o.scrolling))}),o.animateSection=o.activeSection):(o.translate3d="translate3d(0px, 0px, 0px)",o.scrolling="0",o.animateSection=n),e.isFunction(U.onLeave)&&U.onLeave.call(this,o.leavingSection,o.sectionIndex+1,o.yMovement),c(o),k(o.anchorLink),M(o.anchorLink,o.sectionIndex),I=o.anchorLink,P=(new Date).getTime())}function c(n){U.css3?(f(n.animateSection,n.translate3d,n.animated),n.sectionsToMove.each(function(){f(e(this),n.translate3d,n.animated)}),setTimeout(function(){r(n)},U.scrollingSpeed)):(n.scrollOptions=d(n.scrolling),n.animated?n.animateSection.animate(n.scrollOptions,U.scrollingSpeed,U.easing,function(){p(n),r(n)}):(n.animateSection.css(d(n.scrolling)),setTimeout(function(){p(n),r(n)},400)))}function r(n){e.isFunction(U.afterLoad)&&U.afterLoad.call(this,n.anchorLink,n.sectionIndex+1)}function l(n){return"down"===n.yMovement?e(".pp-section").map(function(t){return t<n.destination.index(".pp-section")?e(this):void 0}):e(".pp-section").map(function(t){return t>n.destination.index(".pp-section")?e(this):void 0})}function p(n){"up"===n.yMovement&&n.sectionsToMove.each(function(t){e(this).css(d(n.scrolling))})}function d(e){return"vertical"===U.direction?{top:e}:{left:e}}function u(e,n){U.anchors.length?(location.hash=e,v(location.hash)):v(String(n))}function v(n){n=n.replace("#",""),e("body")[0].className=e("body")[0].className.replace(/\b\s?pp-viewing-[^\s]+\b/g,""),e("body").addClass("pp-viewing-"+n)}function h(){return(new Date).getTime()-P<600+U.scrollingSpeed?!0:!1}function f(e,n,t){e.toggleClass("pp-easing",t),e.css({"-webkit-transform":n,"-moz-transform":n,"-ms-transform":n,transform:n})}function m(n){if(!h()){n=t.event||n,n=Math.max(-1,Math.min(1,n.wheelDelta||-n.deltaY||-n.detail));var o=e(".pp-section.active").filter(".pp-scrollable");return 0>n?g("down",o):g("up",o),!1}}function g(e,n){var t,o;if("down"==e?(t="bottom",o=L.moveSectionDown):(t="top",o=L.moveSectionUp),0<n.length){if(!(t="top"===t?!n.scrollTop():"bottom"===t?n.scrollTop()+1+n.innerHeight()>=n[0].scrollHeight:void 0))return!0;o()}else o()}function S(){return t.PointerEvent?{down:"pointerdown",move:"pointermove",up:"pointerup"}:{down:"MSPointerDown",move:"MSPointerMove",up:"MSPointerUp"}}function w(e){var n=[];return n.y="undefined"!=typeof e.pageY&&(e.pageY||e.pageX)?e.pageY:e.touches[0].pageY,n.x="undefined"!=typeof e.pageX&&(e.pageY||e.pageX)?e.pageX:e.touches[0].pageX,n}function y(e){return"undefined"==typeof e.pointerType||"mouse"!=e.pointerType}function x(e){e=e.originalEvent,y(e)&&(e=w(e),Y=e.y,q=e.x)}function b(n){var t=n.originalEvent;!T(n.target)&&y(t)&&(n.preventDefault(),n=e(".pp-section.active").filter(".pp-scrollable"),h()||(t=w(t),z=t.y,O=t.x,"horizontal"===U.direction&&Math.abs(q-O)>Math.abs(Y-z)?Math.abs(q-O)>D.width()/100*U.touchSensitivity&&(q>O?g("down",n):O>q&&g("up",n)):Math.abs(Y-z)>D.height()/100*U.touchSensitivity&&(Y>z?g("down",n):z>Y&&g("up",n))))}function T(n,t){t=t||0;var o=e(n).parent();return t<U.normalScrollElementTouchThreshold&&o.is(U.normalScrollElements)?!0:t==U.normalScrollElementTouchThreshold?!1:T(o,++t)}function C(){e("body").append('<div id="pp-nav"><ul></ul></div>');var n=e("#pp-nav");n.css("color",U.navigation.textColor),n.addClass(U.navigation.position);for(var t=0;t<e(".pp-section").length;t++){var o="";if(U.anchors.length&&(o=U.anchors[t]),"undefined"!==U.navigation.tooltips){var i=U.navigation.tooltips[t];"undefined"==typeof i&&(i="")}n.find("ul").append('<li data-tooltip="'+i+'"><a href="#'+o+'"><span></span></a></li>')}n.find("span").css("border-color",U.navigation.bulletsColor)}function M(n,t){U.navigation&&(e("#pp-nav").find(".active").removeClass("active"),n?e("#pp-nav").find('a[href="#'+n+'"]').addClass("active"):e("#pp-nav").find("li").eq(t).find("a").addClass("active"))}function k(n){U.menu&&(e(U.menu).find(".active").removeClass("active"),e(U.menu).find('[data-menuanchor="'+n+'"]').addClass("active"))}function E(){var e=n.createElement("p"),i,a={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};n.body.insertBefore(e,null);for(var s in a)e.style[s]!==o&&(e.style[s]="translate3d(1px,1px,1px)",i=t.getComputedStyle(e).getPropertyValue(a[s]));return n.body.removeChild(e),i!==o&&0<i.length&&"none"!==i}var L=e.fn.pagepiling,D=e(this),I,P=0,N="ontouchstart"in t||0<navigator.msMaxTouchPoints||navigator.maxTouchPoints,Y=0,q=0,z=0,O=0,U=e.extend(!0,{direction:"vertical",menu:null,verticalCentered:!0,sectionsColor:[],anchors:[],scrollingSpeed:700,easing:"easeInQuart",loopBottom:!1,loopTop:!1,css3:!0,navigation:{textColor:"#000",bulletsColor:"#000",position:"right",tooltips:[]},normalScrollElements:null,normalScrollElementTouchThreshold:5,touchSensitivity:5,keyboardScrolling:!0,sectionSelector:".section",animateAnchor:!1,afterLoad:null,onLeave:null,afterRender:null},i);e.extend(e.easing,{easeInQuart:function(e,n,t,o,i){return o*(n/=i)*n*n*n+t}}),L.setScrollingSpeed=function(e){U.scrollingSpeed=e},L.setMouseWheelScrolling=function(e){e?D.get(0).addEventListener?(D.get(0).addEventListener("mousewheel",m,!1),D.get(0).addEventListener("wheel",m,!1)):D.get(0).attachEvent("onmousewheel",m):D.get(0).addEventListener?(D.get(0).removeEventListener("mousewheel",m,!1),D.get(0).removeEventListener("wheel",m,!1)):D.get(0).detachEvent("onmousewheel",m)},L.setAllowScrolling=function(e){e?(L.setMouseWheelScrolling(!0),N&&(e=S(),D.off("touchstart "+e.down).on("touchstart "+e.down,x),D.off("touchmove "+e.move).on("touchmove "+e.move,b))):(L.setMouseWheelScrolling(!1),N&&(e=S(),D.off("touchstart "+e.down),D.off("touchmove "+e.move)))},L.setKeyboardScrolling=function(e){U.keyboardScrolling=e},L.moveSectionUp=function(){var n=e(".pp-section.active").prev(".pp-section");!n.length&&U.loopTop&&(n=e(".pp-section").last()),n.length&&s(n)},L.moveSectionDown=function(){var n=e(".pp-section.active").next(".pp-section");!n.length&&U.loopBottom&&(n=e(".pp-section").first()),n.length&&s(n)},L.moveTo=function(n){var t="",t=isNaN(n)?e('[data-anchor="'+n+'"]'):e(".pp-section").eq(n-1);0<t.length&&s(t)},e(U.sectionSelector).each(function(){e(this).addClass("pp-section")}),U.css3&&(U.css3=E()),e(D).css({overflow:"hidden","-ms-touch-action":"none","touch-action":"none"}),L.setAllowScrolling(!0),e.isEmptyObject(U.navigation)||C();var W=e(".pp-section").length;e(".pp-section").each(function(n){e(this).data("data-index",n),e(this).css("z-index",W),n||0!==e(".pp-section.active").length||e(this).addClass("active"),"undefined"!=typeof U.anchors[n]&&e(this).attr("data-anchor",U.anchors[n]),"undefined"!=typeof U.sectionsColor[n]&&e(this).css("background-color",U.sectionsColor[n]),U.verticalCentered&&!e(this).hasClass("pp-scrollable")&&e(this).addClass("pp-table").wrapInner('<div class="pp-tableCell" style="height:100%" />'),--W}).promise().done(function(){U.navigation&&(e("#pp-nav").css("margin-top","-"+e("#pp-nav").height()/2+"px"),e("#pp-nav").find("li").eq(e(".pp-section.active").index(".pp-section")).find("a").addClass("active")),e(t).on("load",function(){var n=t.location.hash.replace("#",""),n=e('.pp-section[data-anchor="'+n+'"]');0<n.length&&s(n,U.animateAnchor)}),e.isFunction(U.afterRender)&&U.afterRender.call(this)}),e(t).on("hashchange",function(){var n=t.location.hash.replace("#","").split("/")[0];n.length&&n&&n!==I&&(n=isNaN(n)?e('[data-anchor="'+n+'"]'):e(".pp-section").eq(n-1),s(n))}),e(n).keydown(function(n){if(U.keyboardScrolling&&!h())switch(n.which){case 38:case 33:L.moveSectionUp();break;case 40:case 34:L.moveSectionDown();break;case 36:L.moveTo(1);break;case 35:L.moveTo(e(".pp-section").length);break;case 37:L.moveSectionUp();break;case 39:L.moveSectionDown()}}),U.normalScrollElements&&(e(n).on("mouseenter",U.normalScrollElements,function(){L.setMouseWheelScrolling(!1)}),e(n).on("mouseleave",U.normalScrollElements,function(){L.setMouseWheelScrolling(!0)})),e(n).on("click touchstart","#pp-nav a",function(n){n.preventDefault(),n=e(this).parent().index(),s(e(".pp-section").eq(n))}),e(n).on({mouseenter:function(){var n=e(this).data("tooltip");e('<div class="pp-tooltip '+U.navigation.position+'">'+n+"</div>").hide().appendTo(e(this)).fadeIn(200)},mouseleave:function(){e(this).find(".pp-tooltip").fadeOut(200,function(){e(this).remove()})}},"#pp-nav li")}}(jQuery,document,window);