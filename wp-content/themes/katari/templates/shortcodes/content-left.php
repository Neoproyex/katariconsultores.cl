<?php
/*
	SHORTCODE: contentleft.

	[contentleft] $content [/contentleft]

	@parámetros: {
		none
	}
*/
?>


<div class="fill col-md-2"> <!-- spacing --> </div>

<div class="content content-left col-md-4 col-12">
	<?php echo do_shortcode( $content ) ?>
</div>