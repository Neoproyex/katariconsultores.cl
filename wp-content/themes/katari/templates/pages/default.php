<?php
	/*
		TEMPLATE: Default.

		@contexto: {
			objeto $page -> referencia a página en cuestión.
			$bg_class -> determina color de fondo de la página según lo establecido por el motor content.php
			$page_type -> tipo de página
			$page_bg -> tipo de fondo
		}
	*/
?>

<?php

	switch( $page_bg ) {
		case "alternativo":
			$page_bg = "alternate-bg";
			break;

		case "alternativo-gris":
			$page_bg = "alternate-gray-bg";
			break;

		default:
			$page_bg = "normal_bg";
	}

?>


<section class="wp-page <?php echo $page_bg ?> container-fluid <?php echo $page_type ?>" id="<?php echo $page->post_name ?>">
	
	<?php echo apply_filters( 'the_content', $page->post_content ) ?>

</section>