<?php
	
	/* Añadir soporte para header image */
	$header = array(		
		'default-image' => get_template_directory_uri() . '/assets/images/header.jpg',
		'uploads'       => true,
	);
	add_theme_support('custom-header', $header );

	/* Añadir soporte para imagenes destacadas */
	add_theme_support('post-thumbnails');

	/* Añadir soporte para menus */
	function register_my_menus(){
		register_nav_menus(
			array(
				'menu-header' => __('Menú del encabezado'),				
				)
		);
	}
	add_action('init', 'register_my_menus');

	/* Añadir soporte para background custom*/
	$background = array(		
		'default-image' => '%1$s/assets/images/background.gif',
	);
	add_theme_support( 'custom-background', $background );

	/* Añadir soporte para widgets */
	function my_register_sidebar(){
		register_sidebar(
			array(
				'id' => 'sidebar-left',
				'name' => 'Sidebar Izquierdo',
				'description' => 'Sitio para poner widgets',
				'before_widget' => '<div class="col-xs-12 widget__item">',
				'after_widget' => '</div>',
				'before_title'  => '<h2 class="widget__title">',
				'after_title'   => "</h2>\n",
			)
		);
	}
	add_action('widgets_init', 'my_register_sidebar');

	/* Añadir Read more... en el loop*/
	function new_excerpt_more($more) {
		return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More...', 'your-text-domain' ) . '</a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );

	/* Exceprt MÁXIMO */
	function custom_excerpt_length($length ) {
		return 35;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>