<?php
	/*
		TEMPLATE: Subpágina.

		@contexto: {
			objeto $page -> referencia a página en cuestión.
			$bg_class -> determina color de fondo de la página según lo establecido por el motor content.php
		}
	*/
?>


<section class="wp-page wp-extra-page has-padding <?php echo $bg_class ?>" id="<?php echo $page->post_name ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h4> <?php echo $page->post_title ?> </h4>
			</div>

			<div class="col-md-9">
				<?php
					// Muestra el contenido de cualquier otra página.
					echo $page->post_content;
				?>
			</div>
		</div>
	</div>
</section>