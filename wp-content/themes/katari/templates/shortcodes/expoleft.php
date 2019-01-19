<?php
/*
	SHORTCODE: expoleft.

	[expoleft id=""]

	@parámetros: {
		'id' -> identificador del expo-left title (asociado a expo-right team)
	}
*/
?>


<?php

	$atts['id'] = $atts['id'] . '-expo-title';

?>


<div class="expo-left side col-md-4 col-12">

	<div id="<?php echo $atts['id'] ?>" class="expo-title">
		<h2> <!-- nombre persona --> </h2>
		<h3> <!-- rol persona --> </h3>
	</div>

</div>