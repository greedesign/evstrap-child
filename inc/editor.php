<?php
/**
 * evStrap modify editor
 *
 * @package evstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Set Child Theme Editor Colour Palette
 */

if ( ! function_exists( 'evstrap_child_setup_theme_supported_features' ) ) {
	function evstrap_child_setup_theme_supported_features() {
		add_theme_support( 'editor-color-palette', array(
				array(
						'name' => __( 'strong magenta', 'themeLangDomain' ),
						'slug' => 'strong-magenta',
						'color' => '#a156b4',
				),
				array(
						'name' => __( 'light grayish magenta', 'themeLangDomain' ),
						'slug' => 'light-grayish-magenta',
						'color' => '#d0a5db',
				),
				array(
						'name' => __( 'very light gray', 'themeLangDomain' ),
						'slug' => 'very-light-gray',
						'color' => '#eee',
				),
				array(
						'name' => __( 'very dark gray', 'themeLangDomain' ),
						'slug' => 'very-dark-gray',
						'color' => '#444',
				),
		) );
	}
}

add_action( 'after_setup_theme', 'evstrap_child_setup_theme_supported_features' );