<?php
/**
 * evStrap enqueue scripts
 *
 * @package evstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function evstrap_remove_scripts() {
    wp_dequeue_style( 'evstrap-styles' );
    wp_deregister_style( 'evstrap-styles' );

    wp_dequeue_script( 'evstrap-scripts' );
    wp_deregister_script( 'evstrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
//add_action( 'wp_enqueue_scripts', 'evstrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-evstrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-evstrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

if ( ! function_exists( 'child_admin_scripts' ) ) {
	/**
	 * Load admin Javascript and CSS sources.
	 */
	function child_admin_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . get_stylesheet_directory_uri() . '/css/admin.min.css';
		wp_enqueue_style('child-admin-styles', get_stylesheet_directory_uri().'/css/admin.min.css', array(), $css_version );

		$js_version = $theme_version . '.' . get_stylesheet_directory_uri() . '/js/admin.min.js';
		wp_enqueue_script( 'child-admin-scripts', get_stylesheet_directory_uri() . '/js/admin.min.js', array(), $js_version, true );

	}
}
add_action( 'admin_enqueue_scripts', 'child_admin_scripts' );

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'evstrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
