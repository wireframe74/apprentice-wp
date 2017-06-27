// Megamenu push-down
    // On li.main hover:
    // 1. Give it 200 milliseconds before doing anything
    // 2. Check if another megamenu is already visible (the user is quickly going from link to link). If so, show the content of the new megamenu without any slide animation and hide the previous one. If no megamenu is currently visible and the hovered li.main has a megamenu, slide it down





jQuery(function($) {





$('.sm.sm-blue').smartmenus({
      subMenusSubOffsetX: 1,
      subMenusSubOffsetY: -8
    });


// PRELOADER

var options = {
classname: 'my-class',
id: 'preloader',
target: document.getElementById('myDivId')
};






$( "#jobs-listing .applybutton a").text("View this Job");
$( "#rightcolumn .applybutton a").text("Apply Today");


$('#findaspecialist input, #findaspecialist select').addClass('form-control');

$('#st-accordion').accordion();

        //Responsive Menu  
    $(".menu-button").click(function () {
        $(".responsive-menu").toggleClass("show-menu");
        $(".hide-content-on-responsive-menu").toggleClass("hide-body");
        $("body").toggleClass("no-scroll");
    });
    $(".responsive-menu .menu-item-has-children .sub-menu").hide();
    $(".responsive-menu .menu-item-has-children").append("<span class='has-details'></span>");
    $(".responsive-menu .has-details").click(function () {
        $(this).parent(".menu-item-has-children").find("> .sub-menu").slideToggle();
        $(this).toggleClass("show");
    });
    $(".hide-content-on-responsive-menu").click(function () {
        $(".responsive-menu").removeClass("show-menu");
        $(this).removeClass("hide-body");
        $("body").removeClass("no-scroll");
    });
//End of Responsive Menu    






  // ANIMATED SEARCH


    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close-button' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
    
    $('form').submit(function(event) {
        event.preventDefault();
        return false;
    })



  // SCROLL ADD CLASS HEADER

$(window).scroll(function() {    


    var scroll = $(window).scrollTop();
    
    if(scroll >= 100) {
        $(".aig-header").addClass("change");



$siteheader.find('li.menu-item-has-children > a').mouseenter(function() {
$siteheader.removeClass('change');
$siteheader.addClass('reversed');
});





$megamenu.mouseleave(function() {
$siteheader.removeClass('reversed');
          setTimeout(function() {
          $siteheader.addClass('change');
      }, 600);
});



    } else {
        $(".aig-header").removeClass("change");
    }
});




  var $siteheader = $('.aig-header');
    var $megamenu = $siteheader.find('nav li .megamenu');
    var $pagecontent = $('#pagecontent');

    // initiate timeout variables
    hoverTimeout = "";
    leaveTimeout = "";
    $siteheader.find('nav li.menu-item-has-children').mouseenter(function() {
        var $thisMegamenu = $(this).find('.megamenu');
         var $thisMegamenuUL = $(this).find('ul.sub-menu')
        // stop any leaveTimeouts if they were triggered through guick back-and-forth hovering
        clearTimeout(leaveTimeout);
        // 1.
        hoverTimeout = setTimeout(function() {
          // 2. Another megamenu already open?
          if( $megamenu.is(':visible') ) {
            // if new hovered li has megamenu, hide old menu and show the new, otherwise slide everything back up
            if( $thisMegamenu.length ) {
              // stop any other hoverTimeouts triggered through guick back-and-forth hovering
              clearTimeout(hoverTimeout); 
              $megamenu.filter(':visible').stop(true, true).hide();
              $thisMegamenu.stop(true, true).show();
            } else {
              $megamenu.filter(':visible').stop(true, true).slideUp(270);
              $pagecontent.stop(true, true).animate({ paddingTop: '0'}, 270);
           
            }
          } else {
            if( $thisMegamenu.length ) {
              // stop any other hoverTimeouts triggered through guick back-and-forth hovering
              clearTimeout(hoverTimeout); 
              $thisMegamenu.stop(true, true).slideDown(270);

              /* 16.5em is the set height of the megamenu + negative margin of nav ul */
              $pagecontent.stop(true, true).animate({ paddingTop: '270px'}, 270);

              
            }
          }
        }, 200);
    });
    // Leaving li item (if another li is hovered over quickly after, this is cleared)
    $siteheader.find('nav li.menu-item-has-children').mouseleave(function() {
      clearTimeout(hoverTimeout);
      leaveTimeout = setTimeout(function() {
        if( $megamenu.is(':visible') ) {
          $megamenu.filter(':visible').stop(true, true).slideUp(500);
          $pagecontent.stop(true, true).animate({ paddingTop: '0'}, 500);
   
        }
      }, 200);
    });



// END MEGA MENU






              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                  nav: true,
                   navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                   stagePadding: 50,
                responsiveClass: true,


                
                responsive: {
                  0: {
                    items: 1,
                       nav: false

                  },
                  600: {
                    items: 3,
                    nav: true,
                         navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                responsiveClass: true

                  },
                  1000: {
                    items: 3,
                    nav: true,
                    loop: false,
                    margin: 10,
                         navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                responsiveClass: true

                  }
                }
              });

            $('.main-link').hover(function(){
            $(this).toggleClass('open');
            });



            });
    



// 'use strict';

// $(function() {

//     var menu_is_open=false,
//     	submenu=null,
//     	header=$('#aig-header'),
//         bodyScrollTop=0,
//         sW = $(window).width(),
//         timer,
//         closeSubMenuTimer,
//         switchSubMenuTimer,
//         ua = navigator.userAgent,
//         preventHoverNav=false,
//         isMobile=/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(ua);
//         isIPhone=/iPhone|iPod/i.test(ua) && /Safari/i.test(ua);
//         isIPad = /iPad/i.test(ua);
//     /**
//      * Highlight header nav depending on current URL
//      */
//     function highlightHeader() {
//       var path = window.location.pathname;
//       if (path != '/') {
//         // Find any link that matches the path and has the data-highlight attr
//         var highlighlink = header.find("a[href*='" + path + "'][data-highlight]");
//         // Only if we find the link we'll do the process
//         if (highlighlink.length) {
//           var attribute = highlighlink.data('highlight');
//           // The selector for the parent menu is specified in the data attribute
//           $("#" + attribute).addClass('header-menu-highlight');
//         }
//       }
//       if(header.data("block-mouse-hover")){
//         preventHoverNav = true;
//       }
//       if(isIPad) {
//         header.addClass('IPad');
//       }
//     }

//     highlightHeader();


//     function toggleMenu () {
//         if(menu_is_open){
//             closeMenu();
//         }else {
//             openMenu();
//         }

//     }
//     function closeMenu () {
//         menu_is_open = false;
//         $(document.body).removeClass('menu-open');
//         closeSubMenu();
//         setTimeout(function () {
//             header.removeClass('aig-header--menu-open');
//             header.css('top','')
//         },300);
//         $("#mpp-app").unbind("click",closeMenu);
//     }

//     function openMenu () {
//         menu_is_open = true;
//         $(document.body).addClass('menu-open');
//         header.addClass('aig-header--menu-open');
//             bodyScrollTop = $('body').scrollTop();
//             header.css('top',bodyScrollTop)
//         $("#mpp-app").bind("click",closeMenu);
//     }
//     function closeSubMenu(closeAnimation) {
//         header.removeClass('aig-header--submenu-open');
//         if(closeAnimation) {
//             header.addClass('aig-header--submenu-close');
//             setTimeout(function () {header.removeClass('aig-header--submenu-close')},500);
//         }
//         $(submenu).removeClass('aig-header__subnav-control--is-active aig-header__subnav-control--is-highlighted ');
//         submenu = null;
//        if(!menu_is_open) $("#mpp-app").unbind("click",closeSubMenu);
//     }
//     function openSubMenu(_submenu) {
//         header.addClass('aig-header--submenu-open');
//         $(_submenu).addClass('aig-header__subnav-control--is-active aig-header__subnav-control--is-highlighted ');
//         submenu = _submenu;
//         if(!menu_is_open) $("#mpp-app").bind("click",closeSubMenu);
//     }
//     function scrollFn() {
//             var scrollTop = $(window).scrollTop() ;
//             if(timer) {
//                 window.clearTimeout(timer);
//             }else {
//                 header.addClass("scrolling");
//             }
//             if(isMobile) {
//                 timer = window.setTimeout(function() {
//                     if(!menu_is_open){
//                         timer=0;
//                         header.removeClass("scrolling");
//                     }
//                 }, 2000);
//             }
//             if(scrollTop > 10){
//                 header.addClass('aig-header--mobile');
//             }else if(scrollTop < 100){
//                 header.removeClass('aig-header--mobile');
//             }
//         }
//         function reset_menu_height() {
//             var menu = $("#main-menu");
//             sW = $(window).width();
//             height = $(window).height();
//             if(sW < 980) {
//                 menu.css("min-height", "calc(100vh)");
//                 menu.height(height);
//                 if(isIPhone){
//                     menu.css("min-height", height);
//                 }
//             }else {
//                 menu.css("min-height", "");
//                 menu.height("");
//             }

//         }

//     $('#menu-button').click(function(e) {
//         e.preventDefault();
//         e.stopPropagation();
//         toggleMenu();
//         scrollFn();
//     });
//     $('#main-menu').click(function(e) {
//         e.stopPropagation();
//     });

//   if (!preventHoverNav) {
//     if (!isIPad) {
//       $('.aig-header__subnav-control').mouseover(function(e) {
//         if (sW < 980) return false;

//         if (closeSubMenuTimer) {
//           window.clearTimeout(closeSubMenuTimer);
//         }
//         if (submenu == null) {
//           openSubMenu(this);
//         } else if (submenu !== this) {
//           switchSubMenuTimer = window.setTimeout(function (_this) {
//             closeSubMenu();
//             openSubMenu(_this);
//           }, 300, this);
//         }
//       });
//       $('.submenu-wrapper').mouseover(function(e) {
//         if (sW < 980) return false;
//         var _submenu = $(this).parent().find('.aig-header__subnav-control')
//         e.preventDefault();
//         if (closeSubMenuTimer) {
//           window.clearTimeout(closeSubMenuTimer);
//         }
//         openSubMenu(_submenu);
//       });
//       $('.aig-header__subnav-control, .submenu-wrapper ').mouseout(function(e) {
//         if (sW < 980) return false;
//         e.preventDefault();
//         if (switchSubMenuTimer) {
//           window.clearTimeout(switchSubMenuTimer);
//         }
//         closeSubMenuTimer = window.setTimeout(function() {
//           closeSubMenu(true);
//         }, 100);
//       });
//     }
//   }

//     $('.aig-header__subnav-control.header-menu-highlight + .submenu-wrapper').mouseover(function(e) {
//         if(sW < 980) return false;
//         $(this).siblings('.header-menu-highlight').addClass('highlight-active');
//     }).mouseout(function (e) {
//         if(sW < 980) return false;
//         $(this).siblings('.header-menu-highlight').removeClass('highlight-active');
//     });

//     $('.aig-header__subnav-control').click(function(e) {
//         e.preventDefault();
//         if(submenu == null){
//             openSubMenu(this);
//         }else if(submenu != this){
//             closeSubMenu();
//             openSubMenu(this);
//         }else {
//             closeSubMenu(true);
//         }
//     });

//     $('.closer-mobile').click(function(e) {
//         e.preventDefault();
// 		closeSubMenu(true);
//     });

//     $('.closer-desktop').click(function(e) {
//         e.preventDefault();
// 		closeSubMenu(true);
//     });

//     $(window).on("scroll touchmove mousewheel", function(e) {
//             scrollFn();
//             if(menu_is_open){
//                 e.preventDefault();
//                 e.stopPropagation();
//                 return false;
//             }
//         });
//     if(!isMobile) {
//         function handleResize() {
//             if(menu_is_open){
//                 closeMenu();
//             }
//             if(submenu != null){
//                 closeSubMenu(true);
//             }
//             reset_menu_height();
//         }
//         header.click(function(e) {
//             e.stopPropagation();
//         });
//         $("#mpp-app").addClass("notMobile");

//         window.addEventListener('resize', handleResize);
//     }else {
//         var menu = $("#main-menu"),
//             height;
//             $("#mpp-app").addClass("mobile");

//             menu.addClass("mobile-scroll");



//         menu.on("touchstart", function(e) {
//             $("#main-menu").data("prevPageY",0);
//         })
//         menu.on("touchmove", function(e) {
//             var scrollHeight = menu.get(0).scrollHeight;//adjustment for Padding

//             var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0],
//              currPageY=touch.pageY,
//              scrollUp = menu.data("prevPageY") ? (menu.data("prevPageY")-currPageY) : 0;

//             menu.data("prevPageY",currPageY);

//             if(((this.scrollTop < (scrollHeight - height)) || scrollUp < 0 )) {

//                 $(this).scrollTop(this.scrollTop+scrollUp);
//             }
//             e.preventDefault();
//             e.stopPropagation();
//             return false;
//         });
//     }

//     $(window).on("orientationchange",function(){
//             setTimeout(reset_menu_height,500);
//             closeMenu();
//         });

//         reset_menu_height();
//        scrollFn();
//     $(document).click(function(e) {
//         if(menu_is_open){
//             closeMenu();
//         }
//         if(submenu != null){
//             closeSubMenu(true);
//         }
//     });

//     var $mainLink = $('#main-menu .main-menu-list .main-link');

//     $mainLink.on('mouseout', removeFocus);

//     function removeFocus(event) {
//         event.preventDefault();
//         $mainLink.filter('.header-menu-highlight').focus();
//     }


// });

// 'use strict';

// $(function() {
//      $('.fat-footer__select').on('change', function(e) {
//         var val = $(e.target).val();
//         if (val) window.location = val;
//     });
// })

// /*Tab Click - Desktop*/
// $(document).on('click','.tabs__links > li',function(){
// 	var tabSection= $(this).parents('.tabs');
// 	var currentTab =$(this).find('[data-tab]').data('tab');
// 	$(tabSection).find('.tabs__links > li').removeClass('active');
// 	$(this).addClass('active');
// 	$(tabSection).find('[data-tab-content="'+currentTab+'"]').fadeIn(400).siblings('.tab').hide();
// 	$(tabSection).find('[data-tab-content="'+currentTab+'"]').addClass('active').siblings('.tab').removeClass('active');
// });
// /*Accordion Click - Mobile*/
// $(document).on('click','[data-accordion]',function(){
// 	var currentPanel = $(this).data('accordion');
// 	var tabSection= $(this).parents('.tabs');
// 	if($(this).hasClass('active'))
// 	{
// 	$(this).removeClass('active');
// 	$(tabSection).find('[data-accordion-content="'+currentPanel+'"]').slideToggle(400);
// 	}
// 	else{
// 	$(this).addClass('active').siblings('[data-accordion]').removeClass('active');
// 	$(tabSection).find('[data-accordion-content="'+currentPanel+'"]').slideToggle(400).siblings('.tab').hide();
// 	}
// })


// (function () {
// 	'use strict'
	
// 	$.fn.PP_heroCarousel = (function () {
// 		var $carouselHolder = $(this),
// 			$CarouselContainer = $carouselHolder.find('.carousel-inner .item'),
// 			$carouselArrow = $carouselHolder.find('.HeroCarouseArrowHolder .heroCarouselArrow'),
// 			$sliderControl = $carouselHolder.find('.herCarouseSlider .heroCarouselNav'),
// 			$leftSlider	= $carouselArrow.filter('.left'),
// 			$rightSlider = $carouselArrow.filter('.right'),
// 			autoSlideOption = $carouselHolder.hasClass('auto-slide-active'),
// 			carouselLength = $sliderControl.length,
// 			currentPosition = 0,
// 			autoTimer = 5000,
// 			sliderTimer = null,
// 			slideResume = true,
// 			transitionOccuring = false;

// 		function initialize() {
// 			$sliderControl.on('click', gotoSlider);			
// 			$leftSlider.on('click', {type : "prev", direction: "right"}, moveSlider);
// 			$rightSlider.on('click', {type : "next", direction: "left"}, moveSlider);
// 			if (autoSlideOption) {
// 				autoSlider(autoTimer);
// 				$carouselHolder.on({ 
// 					"mouseenter": function () { slideResume = false; },
// 					"mouseleave": function () { slideResume = true; autoSlider(autoTimer); }
// 				});
// 			}
// 		};

// 		function gotoSlider(event, type, direction) {
// 			var $obj = $(this),
// 				slideCount = $obj.data('slide');

// 			if (!$obj.hasClass('active') && !transitionOccuring) {
// 				$obj.addClass('active').siblings('.active').removeClass('active');
// 				animateSlider(slideCount, type, direction);	
// 			}			
// 		};

// 		function moveSlider(event) {
// 			var type = event.data.type,
// 				direction = event.data.direction,
// 				pos = (type === "next")? currentPosition + 1 : currentPosition - 1 || 0;

// 			if (autoSlideOption && sliderTimer !== null) {
// 				window.clearTimeout(sliderTimer);
// 			}

// 			gotoSlider.call($sliderControl.eq(getOriginalPosition(pos)),pos, type, direction);
// 		};

// 		function animateSlider(pos, types, directions) {
// 			var direction = directions || ((pos > currentPosition)? "left" : "right"),		
// 				type = types || ((pos > currentPosition)? "next" : "prev"),		
// 				prevPosition = currentPosition,
// 				$active = $CarouselContainer.eq(prevPosition),
// 				$next = $CarouselContainer.eq(pos),
// 				slideValue = -100;
				
// 			direction = directions || direction;
// 			type = types || type;

// 			currentPosition = pos;						
// 			transitionOccuring = true;

// 			$next.addClass(type);
// 			$next[0].offsetWidth;
// 			$active.add($next).addClass(direction);

// 			if ($.support.transition) {
// 				$active.one('bsTransitionEnd', function () {
// 					  $next.removeClass([type, direction].join(' ')).addClass('active');
// 			          $active.removeClass(['active', direction].join(' '));
// 			          transitionOccuring = false;
// 				});
// 			} else {
// 				slideValue = (direction === "left") ? -100 : 100;  

// 				$.when($active.animate({left: (slideValue)+"%" },800), $next.css("left", -(slideValue)+"%").animate({left:'0'},400)).then(function () {
// 					$next.removeClass([type, direction].join(' ')).addClass('active').removeAttr("style")
// 					$active.removeClass(['active', direction].join(' ')).removeAttr("style")
// 					transitionOccuring = false;
// 				});
// 			}
// 			autoSlider(autoTimer);
// 		};


// 		function autoSlider(timer) {
// 			var data = {type : "next", direction: "left"};

// 			if (autoSlideOption) {
// 				sliderTimer = window.setTimeout(function () {
// 					if (slideResume) {
// 						moveSlider({data: data})
// 					}
// 				}, timer);
// 			}
// 		};

// 		function getOriginalPosition(pos) {
// 			return (pos < 0)? carouselLength - 1 : (pos > carouselLength - 1) ? 0 : pos;
// 		}

// 		$(function () {
// 			initialize();
// 		});

// 	});

// })();

// (function ($) {
//   'use strict';

//   // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
//   // ============================================================

//   function transitionEnd() {
//     var el = document.createElement('bootstrap')

//     var transEndEventNames = {
//       WebkitTransition : 'webkitTransitionEnd',
//       MozTransition    : 'transitionend',
//       OTransition      : 'oTransitionEnd otransitionend',
//       transition       : 'transitionend'
//     }

//     for (var name in transEndEventNames) {
//       if (el.style[name] !== undefined) {
//         return { end: transEndEventNames[name] }
//       }
//     }

//     return false // explicit for ie8 (  ._.)
//   }

//   // http://blog.alexmaccaw.com/css-transitions
//   $.fn.emulateTransitionEnd = function (duration) {
//     var called = false
//     var $el = this
//     $(this).one('bsTransitionEnd', function () { called = true })
//     var callback = function () { if (!called) $($el).trigger($.support.transition.end) }
//     setTimeout(callback, duration)
//     return this
//   }

//   $(function () {
//     $.support.transition = transitionEnd()

//     if (!$.support.transition) return

//     $.event.special.bsTransitionEnd = {
//       bindType: $.support.transition.end,
//       delegateType: $.support.transition.end,
//       handle: function (e) {
//         if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
//       }
//     }
//   })

// })(jQuery);

// 'use strict';

// $(function() {
// 	var curr = null;
//    $('.panels__panel').click(function(event) {
// 	   	if(curr == this){
// 	   		$(curr).removeClass( "panels__panel--active" );
// 	   		curr = null;
// 	   	}else {
// 	   		$(curr).removeClass( "panels__panel--active" );
// 	   		$(this).addClass( "panels__panel--active" );
// 	   		curr = this;
// 	   	}
//    });
// })

// 'use strict';

// $(function(){
// 	$(".faq__heading").on("click", function(){
// 	    $(this).toggleClass("active").next("div.faq__content").slideToggle("fast");
// 	});
// });

// 'use strict';

// $(function() {
//    $('.steps-accordion__step').click(function(event) {
//        var curr = $(this).parent().find( ".steps-accordion__step-active" );       
//        if(curr.is(this)){
//            $(this).removeClass('steps-accordion__step-active')
//        }else {
//             curr.removeClass('steps-accordion__step-active')
//            $(this).addClass('steps-accordion__step-active')
//        }
//    });
// })

