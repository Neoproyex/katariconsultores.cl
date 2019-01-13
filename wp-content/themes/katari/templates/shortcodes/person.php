<?php
/*
	SHORTCODE: person.

	[person name="" rol=""] $url_img [/person]

	@parámetros: {
		'name' -> nombre del personal,
		'rol' -> rol del personal en la empresa,
		'hand' -> handler de la imágen del personal con su biografía,
		'active' -> determina si se muestra principalmente activo.
	}
*/
?>

<?php

	$atts['active'] = $atts['active'] ? 'is-selected-person' : '';
	$atts['hand'] = "#team-" . $atts['hand'] . "-handler";

?>

<div data-handler="<?php echo $atts['hand'] ?>" data-name="<?php echo $atts['name'] ?>" data-rol="<?php echo $atts['rol'] ?>" class="carousel-cell <?php echo $atts['active'] ?>">
	<img src="<?php echo $url_img ?>"/>
</div>