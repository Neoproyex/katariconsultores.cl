<?php
/*
	@contexto: {
		$menuItems -> corresponde al objeto-colección 'items' obtenido mediante wp_get_nav_menu_items.
		Hace referencia a los ítems<-menú del lenguaje en cuestión.
	}
*/
?>


<footer class="has-padding footer-bg">

	<div class="container">
		<div class="row">
			<div class="col-md-4 footer-branding">
				<img class="footer-branding-logo" src="<?php echo get_template_directory_uri() ?>/img/synthetica-logo.png" alt="LOGO CORPORATIVO" data-rjs="2"> <a>LOGO CORPORATIVO</a>
				<p> <?php echo t__('Lema, marca o texto.') ?> <a href="#url"><em>Katari</em></a></p>
			</div>
		</div>

		<div class="row">

			<!-- FOOTER MENU -->
			<div class="col-md-12 footer-nav">
				<ul class="footer-primary-nav">
					<?php
						if( $menuItems ):
							//Imprime footer menú. Estructura del menú en $menuItems (Generado en foreach:MAIN_MENU)
							foreach( $menuItems as $menupage ):
								// Obtenemos referencia a la página mediante el item del menú:
								$page = get_post( $menupage->object_id );

								if( $menupage->menu_item_parent == 0 ): ?>
									<li><a href="#<?php echo $page->post_name ?>"><?php echo $page->post_title ?></a></li> <?php
								endif;

							endforeach;

						endif;

					?>
				</ul>

				<?php // Función t__( $text ) traduce la cadena del tema si es que polylang está activo. Si no, la regresa de vuelta. ?>

				<ul class="footer-share">
					<li><a href="#<?php echo strtolower( t__('Licencia') ) ?>"> <?php echo t__('Licencia') ?> </a></li>
					<li><a href="#" class="share-trigger"><i class="fa fa-share"></i> <?php echo t__('Compartir') ?> </a></li>
				</ul>

				<div class="share-dropdown">
					<ul>
						<li><a href="#twitter" class="share-twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#facebook" class="share-facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#linkedin" class="share-linkedin"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>

				<ul class="footer-secondary-nav">
					<li><p> <?php echo t__('Derechos reservados') ?>, <a href="#url"><em>Katari &reg;.</em></a></p></li>
				</ul>
			</div>
			<!-- end FOOTER MENU -->

		</div>
	</div>

</footer>