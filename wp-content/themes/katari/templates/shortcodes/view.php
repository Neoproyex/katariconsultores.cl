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

<div class="row title">

	<div class="col col-md-4 col-12">
		<h1> <?php echo strtoupper( $atts['title'] ) ?> </h1>
	</div>

	<div class="col col-md-8 col-12">
		<h2> <?php echo mb_strtoupper( $atts['sub'], 'utf-8' ) ?> </h2>
		<h3> <?php echo strtoupper( $atts['trans'] ) ?> </h3>
	</div>
 
</div>

<div class="row content"> <!-- content -->
	<div class="col-md-4 col-12">
		<!-- empty -->
	</div>

	<div class="col-md-8 col-12">
		<?php echo $content ?>
	</div>
</div>