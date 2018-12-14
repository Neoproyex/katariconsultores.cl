<?php
/*
	@contexto: {
		$menuItems -> corresponde al objeto-colección 'items' obtenido mediante wp_get_nav_menu_items.
		Hace referencia a los ítems<-menú del lenguaje en cuestión.

		$home_page -> hace referencia al objeto 'page' correspondiente al home (inicio) en el idioma indicado.

		const DEFAULT_IMG_SLIDER -> Dirección URL imágen por defecto para slideritem del slider.

		const TYPE[] -> Array (en theme-config.php) que hace correspondencia de valor meta-dato a plantilla
		o tipo de página.

	# -------------------------------------------------------------------------------------------------------

		Usamos página de 'inicio' como header en forma de slider. Datos pre-procesados a través de shortcodes
		(functions.php).
	}
*/
?>


<?php

	/* 	Obtenemos página de inicio mediante metadata referente a página de inicio. [0]: primer elemento del resultado.
		Página de 'inicio' es el header (slider).
	*/
	$home_page = get_posts(array(
		'meta_key'		=> TYPE_METADATA_KEY,
		'meta_value'	=> TYPE['inicio'],
		'post_type'		=> 'page'
	))[0];

?>

<header class="hero" id="<?php echo $home_page? $home_page->post_name : 'top' // 'top' puede ser reemplazado. ?>">
	<?php

		// Inserta opciones en el Slider de 'inicio':
		if( SLIDER_AUTOPLAY )
			$slider_autoplay = '"autoPlay": ' . SLIDER_AUTOPLAY_TIME;

		$slider_options = "{ $slider_autoplay }";

	?>

	<div class="carousel js-flickity" data-flickity-options='<?php echo $slider_options ?>'>
		<?php

			// Si no existe página 'inicio' creada mostramos slider por defecto.
			if( !$home_page ) {
				$texto1 = 'Texto slider 1.';
				$texto2 = 'Footer, texto.';
				$boton = 'Botón leer más';
				$enlace = '#enlace';
				$content = get_template_directory_uri() . '/img/' . DEFAULT_IMG_SLIDER;

				$SHORTCODE = "[slideritem texto1=\"${texto1}\" texto2=\"${texto2}\" boton=\"${boton}\" enlace=\"${enlace}\"] ${content} [/slideritem]";

				echo do_shortcode( $SHORTCODE );

			// Si página 'inicio' existe entonces..
			} else {
				// se muestra los 'shortcodes' de sliders de página inicio:
				echo apply_filters( 'the_content', $home_page->post_content );
			}

		?>

	</div>

	<?php

		// Busca slug para hacer auto-scroll-down en botón pie slider.
		$menuItems ; // Array
		
		// Si no existe MAIN_MENU creado en wordpress entonces wp_get_nav_menu_items retorna FALSE.
		if( $menuItems ) {

			// Si la primera página es 'inicio' Y existe la siguiente:
			if( $menuItems[0]->object_id == TYPE['inicio'] && $menuItems[1] ) 
				$scrolldown_slug = get_post( $menuItems[1]->object_id )->post_name;
			else // Si no la primera página es cualquier otra:
				$scrolldown_slug = get_post( $menuItems[0]->object_id )->post_name;

		} else // Si no existe menú registrado ó no existen páginas asignadas al menú, entonces:
			$scrolldown_slug = ''; // slug vacío

	?>

	<div class="social">

		<ul>
			<li> <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </li>
			<li> <a href="#" target="_blank"><i class="fa fa-tumblr"></i></a> </li>
		</ul>

	</div>

	<div class="mouse-container">
		<a href="#<?php echo $scrolldown_slug ?>">
			<div class="mouse">
				<span class="scroll-down"></span>
			</div>
		</a>
	</div>

</header>