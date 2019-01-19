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


<div class="carousel-cell">
	<div class="carousel-img" style="background-image: url('<?php echo $content ?>');"></div>

	<div class="hero-bg">
		<div class="container">

			<div class="row justify-content-md-center">

				<div class="col-md-auto col-12 hero-intro-title">
					<h1> <?php echo $atts['texto1'] ?> </h1>
				</div>

				<div class="col-md-auto col-12 hero-intro-text">
					<p> <?php echo $atts['texto2'] ?> </p>
				</div>

			</div>
		</div>
	</div>
</div>