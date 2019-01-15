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

	<!-- SECCIÓN: Footer -->	
		<?php include_once(ROOT . 'components/footer.php') // Incluímos el footer como componente. ?>
	<!-- FIN Footer -->

	<!-- Google Maps -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACK9T5e-fv0vPjXH_2XhhuWwHNs5gEoNc"
  type="text/javascript"></script>
  <!-- end Google Maps -->


	<!-- JS from CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/2.1.3/retina.min.js"></script>
	<!-- end JS from CDN -->


	<!-- JS Locals -->
	<script src="<?php echo get_template_directory_uri() ?>/js/scripts.js"></script>
	<!-- end JS Locals -->

	<?php wp_footer() ?>


	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID and uncomment -->
	<!--
	<script>
	(function(b, o, i, l, e, r) {
		b.GoogleAnalyticsObject = l;
		b[l] || (b[l] =
			function() {
				(b[l].q = b[l].q || []).push(arguments)
			});
		b[l].l = +new Date;
		e = o.createElement(i);
		r = o.getElementsByTagName(i)[0];
		e.src = '//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e, r)
	}(window, document, 'script', 'ga'));
	ga('create', 'UA-XXXXX-X', 'auto');
	ga('send', 'pageview');
	</script>
	-->


	<?php
		// SÓLO PARA DEBUG. -->
		if( DEBUG_MODE ): ?>
			<section id="debug" style="display:none!important"> <?php echo "\n" ?>

				<?php
					// Debug aquí.
				?>

			</section> <?php
		endif;
		//. -->
	?>

</body>

</html>