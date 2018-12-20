<?php
/*
	SHORTCODE: view.

	[view title="" sub="" trans=""] content [/view]

	@parámetros: {
		$atts[
			'title'		-> título.
			'sub'		-> subtítulo.
			'trans'		-> traducción subtítulo
		]

		$content -> contenido.
	}
*/
?>


<div class="container">
	
	<div class="row title-container">
		<div class="title col-md-4 col-12">
			<h1> <?php echo strtoupper( $atts['title'] ) ?> </h1>
		</div>

		<div class="description col-md-8 col-12">
			<h2> <?php echo mb_strtoupper( $atts['sub'], 'utf-8' ) ?> </h2>
			<h3> <?php echo strtoupper( $atts['trans'] ) ?> </h3>
		</div>
	</div>

	<div class="row content-container"> <!-- content -->
		
		<?php echo do_shortcode( $content ) ?>

	</div>

</div>