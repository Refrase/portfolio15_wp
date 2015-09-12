<?php

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

	// Menu
	function p15_theme_menus() {
		register_nav_menus(
			array(
				'Hovedmenu' => __( 'Hovedmenu', 'portfolio15' ),
				'Kategorimenu' => __( 'Kategorimenu', 'portfolio15' ),
				'Randommenu' => __( 'Randommenu', 'portfolio15' )
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
    unset($submenu['themes.php'][15]); }

	// Remove default width and height HTML-attributes from post_thumbnails
	add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

	function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html; }

  // WP admin: Menu item order
	function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;

    return array(
      'index.php', // Dashboard
      'separator1', // First separator
      'edit.php?post_type=website',
      'edit.php?post_type=infographic',
      'edit.php?post_type=motiongraphic',
      'edit.php?post_type=interactive',
      'edit.php?post_type=visualidentity',
      'edit.php?post_type=print',
      'edit.php?post_type=textile',
      'edit.php?post_type=x',
      'separator2', // Second separator
      'edit.php?post_type=page', // Pages
     	'upload.php', // Media
     	'plugins.php', // Plugins
     	'options-general.php', // Settings
      'link-manager.php', // Links
      'themes.php', // Appearance
      'separator-last', // Last separator
    );
	}
	add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
	add_filter('menu_order', 'custom_menu_order');

	// WP admin: Remove menu items
	function edit_admin_menus() {
		remove_menu_page('edit-comments.php'); // Comments
		remove_menu_page('tools.php'); // Tools
		remove_menu_page('edit.php'); // Posts
		remove_menu_page('users.php'); // Users
	}
	add_action( 'admin_menu', 'edit_admin_menus' );

?>