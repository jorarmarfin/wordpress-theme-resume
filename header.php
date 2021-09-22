<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<!--
		Basic
	-->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?=wp_title()?></title>
	
	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<!--
		Load CSS
	-->
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/basic.css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/layout.css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/blogs.css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/ionicons.css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/magnific-popup.css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/animate.css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/owl.carousel.css" />

	<!--
		Background Gradient
	-->
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/gradient.css" />
	
	<!--
		Template New-Skin
	-->
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/new-skin/new-skin.css" />

	<!--
		Template RTL
	-->
	<!--<link rel="stylesheet" href="css/rtl.css" />-->
	
	<!--
		Template Colors
	-->
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/demos/demo-1-colors.css" />
	<!--<link rel="stylesheet" href="css/template-colors/blue.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/orange.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/pink.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/purple.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/red.css" />-->

	<!--
		Template Dark
	-->
	<!--<link rel="stylesheet" href="css/template-dark/dark.css" />-->
	

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--
		Favicons
	-->
	<link rel="shortcut icon" href="<?=get_template_directory_uri()?>/assets/images/favicons/favicon.ico">
	<?php wp_head() ?>
</head>