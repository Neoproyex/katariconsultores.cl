<?php
/*
	SHORTCODE: control.

	[control title="" hand="#" active="0"]

	@parámetros: {
		'title' -> texto título selector,
		'hand' -> id capa de contido respectivo,
		(optional) 'active' -> '0'. Valor booleano string que determina contenido respectivo activo.
	}
*/
?>

<?php

	$atts['active'] = $atts['active'] ? 'active' : '';

?>

<a href="#<?php echo $atts['hand'] ?>" class="list-group-item list-group-item-action <?php echo $atts['active'] ?>" data-toggle="list" role="tab">
	<?php echo $atts['title'] ?>
</a>