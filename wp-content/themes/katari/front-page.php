<?php define( 'ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR ) ?>

<?php get_header() ?>

<?php

	/* 	Obtiene menú en lenguaje actual, Polylang. SE NECESITA VARIABLE
		$menuItems PARA LOS DEMÁS COMPONENTES DE LA PÁGINA */
	
	$nav_menu = get_nav_menu_locations(); // array() de menús
	$menuItems = wp_get_nav_menu_items( $nav_menu[MAIN_MENU] ); // menu-principal

	/* 	Obtenemos página de inicio mediante metadata referente a página de inicio. [0]: primer elemento del resultado.
		Página de 'inicio' es el header (slider).
	*/
	$home_page = get_posts(array(
		'meta_key'		=> TYPE_METADATA_KEY,
		'meta_value'	=> TYPE['inicio'],
		'post_type'		=> 'page'
	))[0];

?>


	<!-- SECCIÓN: PÁGINAS -->
		<?php include_once(ROOT . 'components/content.php') // Incluímos sección de contenidos tipo landing-page. ?>
	<!-- FIN PÁGINAS -->


<?php get_footer() ?>