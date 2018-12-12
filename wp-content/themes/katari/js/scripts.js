$(document).ready(function() {

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

    $('.search-wrapper input').keypress(function(e) {
        if (e.which === 13) { //Enter key pressed
            window.alert("Ready for implementation.");
        }
    });


    /***************** Smooth Scroll ******************/

    $('a[href*="#"]:not([href="#"]):not([class="dropdown-toggle"])').click(function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
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
        $(this).toggleClass('active');
        $('.navicon').toggleClass('fixed');
        $('.primary-nav-wrapper').toggleClass('open');
        event.preventDefault();
    });

    $('.primary-nav-wrapper li a').click(function() {
        $('.nav-toggle').toggleClass('active');
        $('.navicon').toggleClass('fixed');
        $('.primary-nav-wrapper').toggleClass('open');
    });



    /***************** Waypoints ******************/

    $('.wp1').waypoint(function() {
        $('.wp1').addClass('animated fadeInUp');
    }, {
        offset: '80%'
    });
    $('.wp2').waypoint(function() {
        $('.wp2').addClass('animated fadeInUp');
    }, {
        offset: '95%'
    });
    $('.wp3').waypoint(function() {
        $('.wp3').addClass('animated fadeInUp');
    }, {
        offset: '95%'
    });

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

    $('section.wp-page, header.hero').waypoint(
        function ( direction ) {
            if( direction == 'down' )
                doMenuHighlight( this )
        }
    )

    /*  Corrige margen de error de 1px cuando se hace autoscroll hacia arriba.
        No se implementa ajuste en función scrollTo porque borde de 1px de diferencia entre secciones afecta la vista, entonces añadimos waypoint escuchando a -1px del elemento en cuestión. */

    $('section.wp-page, header.hero').waypoint(
        function ( direction ) {
            if( direction == 'up' )
                doMenuHighlight( this )
        },
        
        { offset: '-1' }
    )

    /***************** Overlay touch/hover events ******************/

    if ( Modernizr.touch ) {
        $('figure').bind( 'touchstart touchend', function(e) {
            $(this).toggleClass( 'hover' )
        })
    }
})