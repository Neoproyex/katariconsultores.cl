<?php
/*
	SHORTCODE: profile.

	[profile hand=""] $content [/profile]

	@parámetros: {
		'hand' -> handler del contenido biográfico con la imágen del personal.
	}
*/
?>

<?php

	$atts['active'] = $atts['active'] ? 'show active' : '';
	$atts['hand'] = "team-" . $atts['hand'] . "-profile";

?>


<div id="<?php echo $atts['hand'] ?>" class="tab-pane fade <?php echo $atts['active'] ?>">
	<?php echo do_shortcode( $content ) ?>
</div>