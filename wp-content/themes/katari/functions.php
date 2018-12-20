<?php

/* 	Functions.php
*	Añade funcionaliades al tema. Configuraciones del comportamiento del tema.
*	Registra menús y añade Shortcodes para edición.
*/


require_once('theme-config.php');


// FUNCTIONS ......................................................................


/*	Capa de abstracción para mostrar cadenas del tema base. Habilita posibilidad
	de traducción en el caso de que se necesite. En este caso, con Polylang, si existe.
*/ 
function t__( $text ) {
	if( function_exists('pll__') )
		return pll__( $text ); // o reemplazar por función del traductor a usar.
	else
		return $text;
}

// [slideritem texto1="" texto2="" boton="" enlace=""] url_imagen [/slideritem]
function slideritem_shortcode( $atts, $content = '' ) {
	// Atts:
	$atts = shortcode_atts(
		array(
			'texto1'	=> 'texto1',
			'texto2'	=> 'texto2',
			'boton'		=> 'click',
			'enlace'	=> '#enlace'
		),
		$atts
	);

	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/slideitem.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [view title="" sub="" trans=""] content [/view]
function view_shortcode( $atts, $content = "" ) {
	// Atts:
	$atts = shortcode_atts(
		array(
			'title'=> 'Título',
			'sub'	=> 'Subtítulo',
			'trans'	=> '(Subtitle)'
		),
		$atts,
		''
	);

	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/view.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [empty]
function empty_shortcode() {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/empty.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [content] content [/content]
function content_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/content.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [top] href [/top]
function top_shortcode( $atts, $href = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/top.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// End FUNCTIONS ..................................................................



// REGISTER ........................................................

// Registramos menú principal.
if( function_exists('register_nav_menu') )
	register_nav_menu( MAIN_MENU, 'Menú principal' );

// Registramos shortcode 'slideritem'.
add_shortcode( 'slideritem', 'slideritem_shortcode' );
add_shortcode( 'view', 'view_shortcode' );
add_shortcode( 'empty', 'empty_shortcode' );
add_shortcode( 'content', 'content_shortcode' );
add_shortcode( 'top', 'top_shortcode' );


/*	Sección para registrar cadenas de tema "adicionales" para traducción
	en el caso de que la haya. En este caso, usamos Polylang, si existe.
*/
if( function_exists('pll_register_string') ) {

	/*	Registramos texto adicional del tema. Se pueden reemplazar por funciones
		propias del plugin traductor a usar.
	*/
	pll_register_string( 'Idioma', 'IDIOMA', 'Katari' );
	pll_register_string( 'Marca', 'Lema, marca o texto.', 'Katari' );
	pll_register_string( 'Derechos', 'Derechos reservados', 'Katari' );
	pll_register_string( 'Compartir', 'Compartir', 'Katari' );
	pll_register_string( 'Licencia', 'Licencia', 'Katari' );
	pll_register_string( 'Búsqueda', 'Ingresa lo que buscas...', 'Katari' );

}

//End REGISTER .....................................................


//Eliminar párrafos automáticos por defecto.
//remove_filter('the_content', 'wpautop');
//remove_filter( 'the_excerpt', 'wpautop' );

?>