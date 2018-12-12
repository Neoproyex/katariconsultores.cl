<?php
	/*
		TEMPLATE: Equipo.

		@contexto: { objeto $page -> referencia a página en cuestión. }
	*/
?>


<section class="wp-page has-padding alternate-bg" id="<?php echo $page->post_name ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h4> <?php echo $page->post_title ?> </h4>
			</div>

			<div class="col-md-9">
				<?php
					// Muestra el contenido obtenido mediante ID.
					echo $page->post_content;
				?>
			</div>
		</div>
	</div>
</section>