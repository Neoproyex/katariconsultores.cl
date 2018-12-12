<?php
	/*
		TEMPLATE: Default.

		@contexto: {
			objeto $page -> referencia a página en cuestión.
			$bg_class -> determina color de fondo de la página según lo establecido por el motor content.php
		}
	*/
?>


<section class="wp-page has-padding <?php echo $bg_class ?>" id="<?php echo $page->post_name ?>">
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

<!-- SECCION -->
<!--
<section class="seccion2 freebies has-padding alternate-bg" id="menu2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4>SECCIÓN 2</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 content-left">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur est vitae erat rutrum suscipit. Morbi at nunc id lacus venenatis dapibus. Quisque non ligula eget risus fringilla eleifend. Nullam orci massa, tempus ac aliquet vel, vestibulum venenatis odio. Praesent eget accumsan tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam mollis ex eget tempor pharetra.</p>
			</div>
			
			<div class="col-md-6 content-right">	
				<p>Sed at semper risus. Vestibulum purus odio, consectetur nec leo eu, euismod auctor dui. Nulla lobortis lorem sed risus varius, sit amet rhoncus tellus bibendum. Proin facilisis ipsum nec lectus pellentesque, in fermentum dui dictum. Donec a tempus dui. Maecenas blandit metus condimentum tellus aliquet, eget tempor ipsum accumsan. Quisque scelerisque fermentum augue id feugiat. Pellentesque id erat id velit rhoncus consectetur. Maecenas vel erat velit. Mauris pharetra massa sed dui ullamcorper, id tempus elit aliquet.</p>
			</div>
		</div>
	</div>
</section>
-->
<!-- END SECTION: Crew -->