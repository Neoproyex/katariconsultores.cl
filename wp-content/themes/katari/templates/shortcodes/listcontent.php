<?php
/*
	SHORTCODE: listcontent.

	[listcontent] $content [/listcontent]

	@parámetros: {
		none
	}
*/
?>

<div class="col-md-8 list-group-content">
	<div class="tab-content">
		<?php echo do_shortcode( $content ) ?>
	</div>
</div>