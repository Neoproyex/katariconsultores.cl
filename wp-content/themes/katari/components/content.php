<?php
/*
	@contexto: {
		$menuItems -> corresponde al objeto-colección 'items' obtenido mediante wp_get_nav_menu_items.
		Hace referencia a los ítems<-menú del lenguaje en cuestión.

		const TYPE[] -> Array (en theme-config.php) que hace correspondencia de valor meta-dato a plantilla
		o tipo de página.

		const SUBPAGES -> Determina si mostrar o no las páginas de los Submenús.

		const TYPE_METADATA_KEY -> Nombre de la clave del metadato que guarda el valor el tipo (plantilla)
		de página.

	}
*/
?>

<?php
	
	if( $menuItems ):
		// Contador de páginas "extras": Sirve para ir alternando color de fondo.
		$p = 1;

		// Muestra las páginas.
		foreach( $menuItems as $menuitem ):
			$page = get_post( $menuitem->object_id );

			// Si la página es del tipo "post"
			if( $menuitem->type === "post_type" ):

				/* 	Se captura metadato de página con clave TYPE_METADATA_KEY (por defecto 'tipo')
					que sirve para identificar el tipo de página (en el caso de que se quiera personalizar) */
				$page_type = get_post_meta( $page->ID, TYPE_METADATA_KEY, true );

				// Se captura metadato para fondo alternativo.
				$page_bg = get_post_meta( $page->ID, BG_METADATA_KEY, true );
				
				// Se identifica cuál es la página.
				switch( $page_type ):
					case TYPE['inicio']:
						// SLIDER -->
						$p-- ; // 'inicio' no cuenta como página pero es necesario filtrarla. Decrementa $p.
						break; // omite 'inicio', porque es el slider. Nos aseguramos de omitiarlo.

						case TYPE['equipo']:

						// SECCION: nombre-página -->
							include(ROOT . 'templates/pages/equipo.php');
						// FIN SECCION: nombre de página -->

						break;


					/* 	FORMATO PARA INCLUÍR TEMPLATE PERSONALIZADO DE SECCIÓN.

					case TYPE['tipo-de-página']:

						// SECCION: nombre-página -->
							include(ROOT . 'templates/pages/tipo-de-página.php');
						// FIN SECCION: nombre de página -->

						break;

					*/

					default: // 'Otras' páginas y Sub-páginas.

						// Si es página 'extra':
						if( $page->post_parent == 0 ):
							// Determina fondo página "extra" (opciones: normal | alternate-bg) dependiendo de si su posición de muestra es par.
							$bg_class = ($p % 2 == 0)? 'alternate-bg' : '';
						
							// SECCION: Página "extra" -->
								include(ROOT . 'templates/pages/default.php');
							// FIN SECCION: Página "extra" -->
						else:

							// Es subpágina:
							if( SHOW_SUBPAGES ):
								// Determina fondo subpágina (opciones: normal | alternate-bg) dependiendo de si su posición de muestra es par. Decrementa y retorna valor $p en cada iteración para mantener entre todas las subpáginas el mismo color.
								$bg_class = (--$p % 2 == 0)? 'alternate-bg' : '';
							
								// SECCION: Subpágina -->
									include(ROOT . 'templates/pages/subpagina.php');
								// FIN SECCION: Subpágina -->

							endif;

						endif;

				endswitch;

				$p++ ;

			endif;

		endforeach;
	endif;

?>