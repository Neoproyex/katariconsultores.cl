<?php
	
	/* 	Obtiene menú en lenguaje actual, Polylang. SE NECESITA VARIABLE
	$menuItems PARA LOS DEMÁS COMPONENTES DE LA PÁGINA */
	
	$nav_menu = get_nav_menu_locations(); // array() de menús
	$menuItems = wp_get_nav_menu_items( $nav_menu[MAIN_MENU] ); // menu-principal

?>

<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes() ?>> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js" <?php language_attributes() ?>>
<!--<![endif]-->

<head>

	<!-- meta-data -->
	<meta charset="<?php bloginfo('charset') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('name') ?> | <?php bloginfo('description') ?></title>
	<meta name="description" content="Descripción de la página">
	<meta name="keywords" content="palabras claves de la página" />
	<meta name="author" content="Neoproyex" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end meta-data -->

	<!-- favicon generated by http://realfavicongenerator.net/ -->	
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() ?>/img/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/img/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/img/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/img/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/img/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/img/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/favicon/apple-touch-icon-180x180.png">
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon/favicon.ico">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/favicon-32x32.png" sizes="32x32">

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/android-chrome-36x36.png" sizes="36x36">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/android-chrome-48x48.png" sizes="48x48">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/android-chrome-72x72.png" sizes="72x372">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/android-chrome-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/android-chrome-144x144.png" sizes="36x36">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/android-chrome-256x256.png" sizes="256x256">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/android-chrome-384x384.png" sizes="384x384">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/img/favicon/android-chrome-512x512.png" sizes="512x512">
	
	<link rel="mask-icon" href="<?php echo get_template_directory_uri() ?>/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/site.webmanifest">

	<meta name="msapplication-config" content="<?php echo get_template_directory_uri() ?>/img/favicon/browserconfig.xml">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- end favicon links -->

	<!-- stylesheets -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"> <!-- style.css -->
	<!-- end stylesheets -->

	<?php //wp_head() ?>

</head>

<body>

	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


	<!-- SECCIÓN: Inicio/Slider -->
		<?php include_once(ROOT . 'components/header.php') // Incluímos slider (inicio). ?>
	<!-- FIN Inicio/Slider -->


	<!-- SECCIÓN: NAVMENU PRINCIPAL -->	
		<?php include_once(ROOT . 'components/nav-menu.php') // Incluímos menú principal. ?>
	<!-- FIN NAVMENU PRINCIPAL -->