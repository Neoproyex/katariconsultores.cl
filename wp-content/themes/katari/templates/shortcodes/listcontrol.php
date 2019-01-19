<?php
/*
	SHORTCODE: listcontrol.

	[listcontrol] $content [/listcontrol]

	@parámetros: {
		'id' -> identificador
	}
*/
?>

<div class="list-group-control col-md-4">
	<div id="<?php echo $atts['id'] ?>" class="list-group" role="tablist">
		<?php echo do_shortcode( $content ) ?>
	</div>
</div>