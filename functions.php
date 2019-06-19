<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$evstrap_child_includes = array(
	//'/theme-settings.php',                  // Initialize theme default settings.
	//'/setup.php',                           // Theme setup and custom theme supports.
	//'/widgets.php',                         // Register widget area.
	'/enqueue.php',                           // Enqueue scripts and styles.
	//'/fonts.php',
	//'/template-tags.php',                   // Custom template tags for this theme.
	//'/pagination.php',                      // Custom pagination for this theme.
	//'/hooks.php',                           // Custom hooks.
	//'/extras.php',                          // Custom functions that act independently of the theme templates.
	//'/child-customizer.php',                  // Customizer additions.
	//'/custom-comments.php',                 // Custom Comments file.
	//'/jetpack.php',                         // Load Jetpack compatibility file.
	//'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	//'/custom-acf.php',											// Custom THeme settings Specific to ACF module.
	//'/custom-acf-blocks.php',									// Register ACF Blocks.
	//'/woocommerce.php',                     // Load WooCommerce functions.
	//'/editor.php',                            // Load Editor functions.
	//'/deprecated.php',                      // Load deprecated functions.
	//'/child-custom.php',
);

foreach ( $evstrap_child_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}