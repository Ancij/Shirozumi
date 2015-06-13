<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link href='https://fonts.googleapis.com/css?family=Reenie+Beanie|Lato:400,700' rel='stylesheet' type='text/css'>
	<!-- Flexboxgrid CSS base -->
	<?php wp_enqueue_style('flexboxgrid', get_template_directory_uri() . '/assets/css/vendor/flexboxgrid.min.css',true); ?>
	<!-- Estilo principal del sitio -->
	<?php wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/home.css',true,'1.1'); ?>
	<?php wp_head(); ?>
</head>