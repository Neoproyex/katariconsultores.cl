<?php
/*
	SHORTCODE: set.

	[set ico=""] $content [/set]

	@parámetros: {
		'ico' -> icono
	}
*/
?>

<div class="row set col-12 col-sm-auto col-md-12">
	<div class="icon float-left">
		<i class="<?php echo $atts['ico'] ?>"></i>
	</div>

	<div class="text float-right">
		<?php echo $content ?>
	</div>
</div>