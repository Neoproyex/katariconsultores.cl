<?php
/*
	SHORTCODE: expocontent.

	[expocontent] $content [/expocontent]

	@parámetros: {
		none
	}
*/
?>

<!-- hidden control gateway expo:team-content -->
<div class="nav expo-selector d-none">
	<!-- <a> elements added via javascript -->
</div>
<!-- /hidden control gateway expo:team-content -->

<div class="tab-content expo-content">
		<?php echo do_shortcode( $content ) ?>
</div>