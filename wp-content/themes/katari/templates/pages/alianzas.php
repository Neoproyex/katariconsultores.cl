<?php
	/*
		TEMPLATE: Alianzas.

		@contexto: { objeto $page -> referencia a página en cuestión. }
	*/
?>


<section class="wp-page alternate-bg" id="<?php echo $page->post_name ?>">
	
	<?php echo apply_filters( 'the_content', $page->post_content ) ?>

</section>