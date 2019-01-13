<?php
/*
	SHORTCODE: c.

	[c] $content [/c]

	@parámetros: {
		'hand' -> hand del selector,
		'active' -> '0'. Determina si el contenido se muestra inicialmente activo.
	}
*/
?>

<?php

	$atts['active'] = $atts['active'] ? 'show active' : '';

?>

<div id="<? echo $atts['hand'] ?>" class="tab-pane fade <?php echo $atts['active'] ?>" role="tabpanel">
	<?php echo $content ?>
</div>