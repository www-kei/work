<?php
	// Thumbnails
	add_theme_support( 'post-thumbnails' );
	// Menus
	register_nav_menus( array(
		'main_menu' => 'Main Menu',
		'sidebar_menu' => 'Sidebar Menu'
	));
	// Sidebar
	register_sidebar( array(
		'name' => __( 'Right Sidebar' ),
	));
	register_sidebar( array(
		'name' => __( 'Left Sidebar' ),
	));
?>