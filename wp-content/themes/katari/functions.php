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

// Elimina saltos de líneas y párrafos vacíos entre shortcodes.
function wp_fix_shortcodes( $content ){   
    $array = array (
        '<p>[' => '[', 
        ']</p>' => ']', 
        ']<br />' => ']'
    );

    $content = strtr( $content, $array );

    return $content;
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

		include(ROOT . 'templates/shortcodes/slideritem.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [title title="" sub="" trans=""] content [/title]
function section_shortcode( $atts, $content = "" ) {
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

		include(ROOT . 'templates/shortcodes/section.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [side]
function side_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/side.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [sidecontent] content [/sidecontent]
function sidecontent_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/sidecontent.php');

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

// [contentleft] content [/contentleft]
function contentleft_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/content-left.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [contentright] content [/contentright]
function contentright_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/content-right.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [set] content [/set]
function set_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/set.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [slider] content [/slider]
function slider_shortcode( $atts, $content = "" ) {
	// Atts:
	$atts = shortcode_atts(
		array(
			'options'=> '{ "autoPlay": 5000, "wrapAround": true, "rightToLeft": true, "selectedAttraction": 0.01, "friction": 0.15 }'
		),
		$atts
	);

	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/slider.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [img] bg_image_url [/img]
function img_shortcode( $atts, $bg_image_url = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/img.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [fullcontent] content [/fullcontent]
function fullcontent_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/fullcontent.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [listgroup] content [/listgroup]
function listgroup_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/listgroup.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [listcontrol] content [/listcontrol]
function listcontrol_shortcode( $atts, $content = "" ) {
	// Atts:
	$atts = shortcode_atts(
		array(
			'id'=> ''
		),
		$atts
	);

	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/listcontrol.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [control title="" hand=""]
function control_shortcode( $atts ) {
	// Atts:
	$atts = shortcode_atts(
		array(
			'title'=> '',
			'hand' => '',
			'active' => '0'
		),
		$atts
	);

	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/control.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [listcontent] content [/listcontent]
function listcontent_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/listcontent.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [c hand="" active=""]
function c_shortcode( $atts, $content ) {
	// Atts:
	$atts = shortcode_atts(
		array(
			'hand' => '',
			'active' => '0'
		),
		$atts
	);

	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/c.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [expoleft id=""]
function expoleft_shortcode( $atts, $content = "" ) {
	// Atts:
	$atts = shortcode_atts(
		array(
			'id' => ''
		),
		$atts
	);

	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/expoleft.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [exporight] content [/exporight]
function exporight_shortcode( $atts, $content = "" ) {
	// Atts:
	$atts = shortcode_atts(
		array(
			'id' => ''
		),
		$atts
	);
	
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/exporight.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [expoteam] content [/expoteam]
function expoteam_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/expoteam.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [person name="" rol="" hand="" active=""]
function person_shortcode( $atts, $url_img ) {
	// Atts:
	$atts = shortcode_atts(
		array(
			'name' => '',
			'rol' => '',
			'hand' => '',
			'active' => '0'
		),
		$atts
	);

	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/person.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [expocontent] content [/expocontent]
function expocontent_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/expocontent.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [profile hand=""] content [/profile]
function profile_shortcode( $atts, $content ) {
	// Atts:
	$atts = shortcode_atts(
		array(
			'hand' => '',
			'active' => '0'
		),
		$atts
	);

	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/profile.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [grades] content [/grades]
function grades_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/grades.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// [bio] content [/bio]
function bio_shortcode( $atts, $content = "" ) {
	// Transforma a salida html pura:
	ob_start();

		include(ROOT . 'templates/shortcodes/bio.php');

	// Retorna salida html pura.
	return ob_get_clean();
}

// End FUNCTIONS ..................................................................


// REGISTER ........................................................

// Registramos menú principal.
if( function_exists('register_nav_menu') )
	register_nav_menu( MAIN_MENU, 'Menú principal' );

// Agrega filtro que elimina salto de línea y párrafos en blancos entre shortcodes.
add_filter( 'the_content', 'wp_fix_shortcodes' );

// Registramos shortcode 'slideritem'.
add_shortcode( 'slideritem', 'slideritem_shortcode' );
add_shortcode( 'section', 'section_shortcode' );
add_shortcode( 'side', 'side_shortcode' );
add_shortcode( 'sidecontent', 'sidecontent_shortcode' );
add_shortcode( 'content', 'content_shortcode' );
add_shortcode( 'contentleft', 'contentleft_shortcode' );
add_shortcode( 'contentright', 'contentright_shortcode' );
add_shortcode( 'top', 'top_shortcode' );
add_shortcode( 'set', 'set_shortcode' );
add_shortcode( 'slider', 'slider_shortcode' );
add_shortcode( 'img', 'img_shortcode' );
add_shortcode( 'fullcontent', 'fullcontent_shortcode' );
add_shortcode( 'listgroup', 'listgroup_shortcode' );
add_shortcode( 'listcontrol', 'listcontrol_shortcode' );
add_shortcode( 'control', 'control_shortcode' );
add_shortcode( 'listcontent', 'listcontent_shortcode' );
add_shortcode( 'c', 'c_shortcode' );
add_shortcode( 'expoleft', 'expoleft_shortcode' );
add_shortcode( 'exporight', 'exporight_shortcode' );
add_shortcode( 'expoteam', 'expoteam_shortcode' );
add_shortcode( 'person', 'person_shortcode' );
add_shortcode( 'expocontent', 'expocontent_shortcode' );
add_shortcode( 'profile', 'profile_shortcode' );
add_shortcode( 'grades', 'grades_shortcode' );
add_shortcode( 'bio', 'bio_shortcode' );


/*	Sección para registrar cadenas de tema "adicionales" para traducción
	en el caso de que la haya. En este caso, usamos Polylang, si existe.
*/
if( function_exists('pll_register_string') ) {

	/*	Registramos texto adicional del tema. Se pueden reemplazar por funciones
		propias del plugin traductor a usar.
	*/
	pll_register_string( 'Idioma', 'IDIOMA', 'Katari' );
	pll_register_string( 'Slogan', 'Conocimiento, Desarrollo y Medio Ambiente.', 'Katari' );
	pll_register_string( 'Derechos', 'Derechos reservados', 'Katari' );
	pll_register_string( 'Compartir', 'Compartir', 'Katari' );
	//pll_register_string( 'Licencia', 'Licencia', 'Katari' );
	pll_register_string( 'Búsqueda', 'Ingresa lo que buscas...', 'Katari' );

}

//End REGISTER .....................................................


//Eliminar párrafos automáticos por defecto.
//remove_filter('the_content', 'wpautop');
//remove_filter( 'the_excerpt', 'wpautop' );

?>