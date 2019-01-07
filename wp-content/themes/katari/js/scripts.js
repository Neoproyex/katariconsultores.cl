
$(document).ready(function() {

    var fixed_menu = false

    /***************** Header slider  ******************/

    var carousel_transition = function() {
        var $this = $('.carousel-cell:not(.is-selected)', this)
            .find('.hero-intro-title h1, .hero-intro-text').css('visibility', 'hidden');

        $('.carousel').find('.is-selected .hero-intro-title h1')
            .css('visibility', 'visible')
            .animateCss('fadeInDown');

        $('.carousel').find('.is-selected .hero-intro-text')
            .css('visibility', 'visible')
            .animateCss('fadeInUp');
    }

    $('.carousel').on( 'ready.flickity', carousel_transition );
    $('.carousel').on( 'change.flickity', carousel_transition );

    $('.carousel').flickity( jQuery('.carousel').data('flickity-options') );


    /***************** Share Dropdown ******************/

    $("li a.share-trigger").on("click", function() {
        $('.share-dropdown').toggleClass("is-open");
        event.preventDefault();
    });

    /***************** Search Component ******************/

    $(".show-search").on("click", function() {
        $(".search-wrapper").addClass("is-visible");
    });

    $(".hide-search").on("click", function() {
        $(".search-wrapper").removeClass("is-visible");
        $(".search-wrapper input").removeClass("is-selected");
    });

    $(".search-wrapper input").on("click", function() {
        $(this).addClass("is-selected");
    });

    /*$('.search-wrapper input').keypress(function(e) {
        if (e.which === 13) { //Enter key pressed
            window.alert("Ready for implementation.");
        }
    });*/


    /***************** Fixed menu ******************/

    if( fixed_menu ) {

        var menu_height = $('.header-nav-wrapper').outerHeight( true )

        $('.menu-bar').waypoint(function() {
            menu_height = $('.header-nav-wrapper').outerHeight( true )
            var header_height = $('.hero').outerHeight( true )

            if ( $(window).scrollTop() >= header_height ) {
                $('.menu-bar').addClass('fixed-menu')
                $('.wp-page').first().css('margin-top', menu_height + 'px')
            } else {
                $('.menu-bar').removeClass('fixed-menu')
                $('.wp-page').first().css('margin-top', '0px')
            }
        });
    }


    /* OFFSET SCROLLING --------------------------------------*/
    var offset_scrolling = fixed_menu? menu_height : 0
    /* -----------------------------------------------------*/


    /***************** Smooth Scroll ******************/

    $('a[href*="#"]:not([href="#"]):not([class="dropdown-toggle"])', '.header-nav-wrapper, .footer-primary-nav, .mouse-container').click(function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - offset_scrolling
                }, 800);

                var $parent = $(this).parent().parent();

                if($parent.hasClass("dropdown-menu"))
                    $parent.parent().toggleClass('open');
                
                return false;
            }
        }
    });

    /***************** Responsive Nav ******************/

    $('.nav-toggle').click(function() {
        $('.primary-nav-wrapper').toggleClass('open');
        $(this).toggleClass('active');
        $('.navicon').toggleClass('fixed');
        event.preventDefault();
    });

    $('.primary-nav-wrapper li a').click(function() {
        $('.primary-nav-wrapper').toggleClass('open');
        $('.nav-toggle').toggleClass('active');
        $('.navicon').toggleClass('fixed');
    });



    /***************** Waypoints ******************/

    $('.wp1').waypoint(function() {
        $('.wp1').addClass('animated fadeInDown');
    }, {
        offset: '80%'
    });

    $('.wp2').waypoint(function() {
        $('.wp2').addClass('animated fadeInUp');
    }, {
        offset: '95%'
    });

    $('.wp3').each(function() {
        $(this).waypoint(function() {
            $(this.element).addClass('animated fadeIn');
        }, {
            offset: '90%'
        });
    });


    if( fixed_menu ) {

        // Menu highlight waypoints ------------------------------------

        function doMenuHighlight ( objetive ) {
            let objetiveID = objetive.element.getAttribute( 'id' )
            let menuItemSelector = `a[href="#${objetiveID}"]`
            let $menuItem = $(menuItemSelector, '.primary-nav')

            if ( !$menuItem.length ) {
                menuItemSelector = `a[name="${objetiveID}"]`
                $menuItem = $(menuItemSelector, '.primary-nav')
            }

            $('a.menu-active', '.primary-nav').removeClass( 'menu-active' )

            if ( $menuItem.hasClass('dropdown-item') ) {
                $menuParentItem = $menuItem.parent().prev()
                
                if ( !$menuParentItem.hasClass('menu-active') )
                    $menuParentItem.addClass( 'menu-active' )
            }

            $menuItem.toggleClass( 'menu-active' )
        }

         // Añade waypoint para destacar página enfocada en menú.

        $('section.wp-page').waypoint(
            function ( direction ) {
                if( direction == 'down' )
                    doMenuHighlight( this )
            },

            { offset: offset_scrolling }
        )

        $('header.hero').waypoint(
            function ( direction ) {
                if( direction == 'down' )
                    doMenuHighlight( this )
            }
        )

        /*  Corrige margen de error de 1px cuando se hace autoscroll hacia arriba.
        No se implementa ajuste en función scrollTo porque borde de 1px de diferencia entre secciones afecta la vista, entonces añadimos waypoint escuchando a -1px del elemento en cuestión. */

        $('section.wp-page').waypoint(
            function ( direction ) {
                if( direction == 'up' )
                    doMenuHighlight( this )
            },
            
            { offset: offset_scrolling - 1 }
        )

        $('header.hero').waypoint(
            function ( direction ) {
                if( direction == 'up' )
                    doMenuHighlight( this )
            },
            
            { offset: -1 }
        )
    }


    /***************** Overlay touch/hover events ******************/

    if ( Modernizr.touch ) {
        $('figure').bind( 'touchstart touchend', function(e) {
            $(this).toggleClass( 'hover' )
        })
    }


    /***************** Fixes some shit ****************************/

    $('.list-group-item', '.page-list-group').last().addClass('list-group-item-last');
})


// Extends jQuery with animateCss()

$.fn.extend({
  animateCss: function(animationName, callback) {
    var animationEnd = (function(el) {
      var animations = {
        animation: 'animationend',
        OAnimation: 'oAnimationEnd',
        MozAnimation: 'mozAnimationEnd',
        WebkitAnimation: 'webkitAnimationEnd',
      };

      for (var t in animations) {
        if (el.style[t] !== undefined) {
          return animations[t];
        }
      }
    })(document.createElement('div'));

    this.addClass('animated ' + animationName).one(animationEnd, function() {
      $(this).removeClass('animated ' + animationName);

      if (typeof callback === 'function') callback();
    });

    return this;
  },
});