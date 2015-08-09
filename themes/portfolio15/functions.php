<?php

	add_theme_support( 'menus' );

	// Menu
	function p15_theme_menus() {
		register_nav_menus(
			array(
				'Hovedmenu' => __( 'Hovedmenu', 'portfolio15' ),
				'Kategorimenu' => __( 'Kategorimenu', 'portfolio15' )
			)
		);
	} add_action( 'init', 'p15_theme_menus' );

	// Styling
	function p15_theme_styles() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	} add_action( 'wp_enqueue_scripts', 'p15_theme_styles' );

	// Scripts
	function p15_theme_js() {
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true );
	} add_action( 'wp_enqueue_scripts', 'p15_theme_js' );

	// Disable possibility of changing theme
	add_action('admin_init', 'remove_theme_menus');
	function remove_theme_menus() {
    global $submenu;
    unset($submenu['themes.php'][5]);
    unset($submenu['themes.php'][15]);
	}

?>