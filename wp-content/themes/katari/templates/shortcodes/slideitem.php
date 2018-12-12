<?php
/*
	SHORTCODE: slideitem.

	[slideritem texto1="" texto2="" boton="" enlace=""] url_imagen [/slideritem]

	@parámetros: {
		$atts[
			'texto1'	-> título.
			'texto2'	-> footer.
			'boton'		-> texto botón.
			'enlace'	-> enlace botón.
		]

		$content -> contenido.
	}
*/
?>


<div class="carousel-cell" style="background-image: url('<?php echo $content ?>');">
	<div class="hero-bg">
		<div class="container">

			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="wp1"> <?php echo $atts['texto1'] ?> </h1>
					<a href="<?php echo $atts['enlace'] ?>" class="btn primary wp2"> <?php echo $atts['boton'] ?> </a>
				</div>
			</div>

		<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

			<div class="row d-flex justify-content-center">
				<div class="col-md-8 col-md-offset-2 hero-intro-text wp3">
					<p><span class="bold italic"> <?php echo $atts['texto2'] ?> </span></p>
				</div>
			</div>

		</div>
	</div>
</div>