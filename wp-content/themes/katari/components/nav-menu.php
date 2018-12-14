<?php
/*
	@contexto: {
		$menuItems -> corresponde al objeto-colección 'items' obtenido mediante wp_get_nav_menu_items.
		Hace referencia a los ítems<-menú del lenguaje en cuestión.

		$home_page -> hace referencia al objeto 'page' correspondiente al home (inicio) en el idioma indicado.

		pll_the_languages() -> Imprime selector de lenguajes (función de polylang) si está instalado.

	# ---------------------------------------------------------------------------------------------------

		#href 'top' puede ser reemplazado por lo que quieras que sea tu "top" de página en situaciones
		por defecto..
	}
*/
?>

<div class="container-fluid">

	<div class="row d-block">
		<div class="header-nav-wrapper">
			<div class="logo">
				<a href="#<?php echo $home_page? $home_page->post_name : 'top' ?>"> <!-- "top" -->
					<img src="<?php echo get_template_directory_uri() ?>/img/synthetica-logo.png" alt="LOGO CORPORATIVO" data-rjs="2">
				</a>
			</div>

			<div class="primary-nav-wrapper">
				<nav class="navbar">
					<ul class="primary-nav">

						<?php
						
							/* 	Se muestra el menú de una forma personalizada iterando sobre elementos extraídos con
								wp_get_nav_menu_items() en variable $menuItems. Se hace de esta forma porque wordpress
								a pesar de permitir personalizar algunos parámetros de como se genera no otorga total
								control.
							*/

							if( $menuItems ):

								// Vars.
								$c = 0;
							    $hasSubmenu = false;

							    foreach( $menuItems as $menuitem ):
							    	/*	DIFERENCIA:
							    		$menuitem hace referencia al objeto del menu que hace referencia a la página.
										$page es el objeto referenciado directamente a la página.
							    	*/

									$menuitem;
							    	$page = get_post( $menuitem->object_id );

							    	// Determina valores de enlaces y target para el tipo de menuitem (página, link, categoría..)

							    	$target = '';

							    	if( $menuitem->type === 'post_type' ):
					        			$href = "#" . $page->post_name;

					        		elseif( $menuitem->type === 'custom' ):
					        			$href = $menuitem->url;
					        			$target = ' target="_blank"';

					        		elseif( $menuitem->type === 'taxonomy' ):
					        			$href = $menuitem->url;

					        		endif;

							        // menu_item_parent == 0 ; página no tiene página padre.
							        if ( $menuitem->menu_item_parent == 0 ):

							        	$parentID = $menuitem->ID; // Se guarda ID para comparar luego con subitems.
							        	// Si la siguiente página no es submenú, entonces la página actual se muestra en el menú como item único. Si SHOW_SUBMENUS está desactivado, entonces la página con submenú se muestra como si no lo tuviera.

							        	if( !array_key_exists($c+1, $menuItems) || ( array_key_exists($c+1, $menuItems) && $menuItems[$c+1]->menu_item_parent == 0 ) || !SHOW_SUBMENUS ): ?>

											<li>
										        <a href="<?php echo $href ?>"<?php echo $target ?>>
										        	<?php echo $menuitem->title ?>
										        </a> <?php
										// Si no, tiene submenú y debe mostrarse la estructura correspondiente al submenú.
										else: ?>

											<li class="dropup">
										        <a href="#" name="<?php echo $page->post_name ?>" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										            <?php echo $menuitem->title ?>
										        </a> <?php

							        	endif;

						    		endif;

						    		// Se muestran los submenús:
						    		if ( $parentID == $menuitem->menu_item_parent ):

						    			if ( !$hasSubmenu ):

						    				$hasSubmenu = true; ?>
						        			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <?php

										endif; ?>

						            	<a class="dropdown-item" href="<?php echo $href ?>"<?php echo $target ?>>
						            		<?php echo $menuitem->title ?></a> <?php

										if ( ( array_key_exists($c+1, $menuItems) && $menuItems[$c+1]->menu_item_parent != $parentID ) && $hasSubmenu ):

											$hasSubmenu = false; ?>
						        			</div> <?php

						        		endif;

						   			endif;

						    		if ( array_key_exists($c+1, $menuItems) && $menuItems[$c+1]->menu_item_parent != $parentID ):

						    			$hasSubmenu = false; ?>
										</li> <?php

									endif;

									$c++;

								endforeach;

							endif;
						?>

					</ul>

				</nav>

				<div class="secondary-nav-wrapper">
					<ul class="secondary-nav">
						<li class="language">
							<?php
								// Si está activada opción de multilenguaje y si las funciones de Polylang existen, se carga selector de idiomas.
								if( function_exists('pll_the_languages') ): ?>

									<a> <?php echo t__('IDIOMA') ?> /</a> <?php
									pll_the_languages( array('dropdown' => 1, 'display_names_as' => 'slug') );
									
								endif;
							?>
						</li>
						<li class="search"><a href="#search" class="show-search"><i class="fa fa-search"></i></a></li>
					</ul>
				</div>

				<div class="search-wrapper">
					<ul class="search">
						<li>
							<input type="text" id="search-input" placeholder="<?php echo t__('Ingresa lo que buscas...') ?>">
						</li>
						<li>
							<a href="#" class="hide-search"><i class="fa fa-close"></i></a>
						</li>
					</ul>
				</div>
			</div>

			<div class="navicon">
				<a class="nav-toggle" href="#"><span></span></a>
			</div>
		</div>
	</div>
	
</div>