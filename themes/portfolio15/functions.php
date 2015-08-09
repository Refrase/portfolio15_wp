<?php

	// Styling
	function lh_theme_styles() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	} add_action( 'wp_enqueue_scripts', 'lh_theme_styles' );

	// Scripts
	function lh_theme_js() {
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true );
	} add_action( 'wp_enqueue_scripts', 'lh_theme_js' );

	// Disable possibility of changing theme
	add_action('admin_init', 'remove_theme_menus');
	function remove_theme_menus() {
    global $submenu;
    unset($submenu['themes.php'][5]);
    unset($submenu['themes.php'][15]);
	}

?>