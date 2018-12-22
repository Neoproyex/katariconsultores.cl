<?php
	/*
		TEMPLATE: Default.

		@contexto: {
			objeto $page -> referencia a página en cuestión.
			$bg_class -> determina color de fondo de la página según lo establecido por el motor content.php
			$page_type -> tipo de página
		}
	*/
?>


<section class="wp-page container-fluid <?php echo $page_type ?>" id="<?php echo $page->post_name ?>">
	
	<?php echo apply_filters( 'the_content', $page->post_content ) ?>

</section>