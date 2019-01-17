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

    $('.carousel').on( 'ready.flickity', function() {
        carousel_transition();

        // Determina si va añadir efecto aparición a menu desktop o móbil.
        if( $('.navicon').css('visibility') == 'hidden' )
            var nav = '.primary-nav-wrapper'
        else
            var nav = '.navicon'

        $('.logo img, ' + nav)
            .css('visibility', 'visible')
            .animateCss('fadeInUp', function() {
                $('.social, .mouse-container, .flickity-page-dots')
                    .css('visibility', 'visible')
                    .animateCss('fadeIn');
            });
    });

    $('.carousel').on( 'change.flickity', carousel_transition );

    $('.carousel').flickity( jQuery('.carousel').data('flickity-options') );


    /***************** Share Dropdown ******************/

    $("li a.share-trigger").on("click", function() {
        $('.share-dropdown').toggleClass("is-open");
        event.preventDefault();
    });

    /***************** Search Component ******************/

    /* $(".show-search").on("click", function() {
        $(".search-wrapper").addClass("is-visible");
    });

    $(".hide-search").on("click", function() {
        $(".search-wrapper").removeClass("is-visible");
        $(".search-wrapper input").removeClass("is-selected");
    });

    $(".search-wrapper input").on("click", function() {
        $(this).addClass("is-selected");
    });

    $('.search-wrapper input').keypress(function(e) {
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


    /***************** <a> Smooth Scroll ******************/

    var a_context = '.header-nav-wrapper, .mouse-container, .footer-primary-nav, .footer-branding';

    $('a[href*="#"]:not([href="#"]):not([class="dropdown-toggle"])', a_context).click(function() {
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

    // delete line on not 100% width images
    $('.expo-team').find('.carousel-cell').css( 'width', 100 / $('.carousel-cell', '.expo-team').length + "%" )

     /***************** Expo-team functions (equipo) ****************************/


    $('.expo-team').each(function() {
        // Agrega datos persona seleccionada por defecto en expo-title al cargar página:
        var selected = $('.is-selected-person', this)
        var title_id = '#' + $(this).parent().attr('id') + '-title'

        $('h2', title_id).text( selected.data('name') )
        $('h3', title_id).text( selected.data('rol') )

        $(this).parent().find('.expo-title-secondary h2').text( selected.data('name') )
        $(this).parent().find('.expo-title-secondary h3').text( selected.data('rol') )

        // Agrega elementos <a> gateway para paso de eventosentre plugin carousel y bootstrap tab:
        // no .next() para prevenir errores por elementos <br/> colados en wordpress.
        var selector = $(this).parent().find('.expo-selector')

        $('.carousel-cell', this).each(function() {
            var attrs = {
                id: $(this).data('handler').replace('#', ''),
                href: $(this).data('handler').replace("handler", "profile")
            }

            selector.append( $('<a>').attr(attrs) )
        })
    })

    // Flickity functions:
    $('.expo-team').flickity({
        cellAlign: 'left',
        contain: true,
        pageDots: false
    }).on( 'staticClick.flickity', function( e, p, target, index ) {
        if( !$(target).hasClass('is-selected-person') ) {
            var handler = $(target).data('handler')

            // Quita clases anteriores seleccionadas y selecciona la nueva.
            $('.carousel-cell', this).removeClass('is-selected-person')
            $(target).addClass('is-selected-person')

            // Pone nombre y rol de la persona seleccionada.
            var expo_title = '#' + $(this).parent().attr('id') + '-title'
            var expo_title_secondary = $(this).parent().find('.expo-title-secondary')

            var name = $(target).data('name')
            var rol = $(target).data('rol')
     
            $('h2, h3', expo_title).fadeOut(0, function() {
                $('h2', expo_title).text( name )
                $('h3', expo_title).text( rol )
            })

            $('h2, h3', expo_title_secondary).fadeOut(0, function() {
                $('h2', expo_title_secondary).text( name )
                $('h3', expo_title_secondary).text( rol )
            })

            $('h2, h3', expo_title).fadeIn(100)
            $('h2, h3', expo_title_secondary).fadeIn(100)

            $(handler).tab('show')
            $(this).flickity('select', index)
        }
    })

    var wpcf7 = document.querySelector( '.wpcf7' )
 
    wpcf7.addEventListener( 'wpcf7invalid', function( event ) {
        $this_wpcf7 = this;

        $('.wpcf7-not-valid', $this_wpcf7).animateCss('shake', function() {
            //$('.wpcf7-not-valid-tip', $this_wpcf7).fadeIn()
        })
    }, false )

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