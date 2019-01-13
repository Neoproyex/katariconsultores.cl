<?php
/*
	SHORTCODE: exporight.

	[exporight id=""] $content [/exporight]

	@parámetros: {
		'id' -> identificador del expo-right team (asociado a expo-title)
	}
*/
?>


<?php

	$atts['id'] = $atts['id'] . '-expo';

?>


<div id="<?php echo $atts['id'] ?>" class="expo-right content col-md-8 col-12">
	<?php echo do_shortcode( $content ) ?>
</div>