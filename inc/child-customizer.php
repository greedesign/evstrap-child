<?php
/**
 * evStrap Child Theme Customizer
 *
 * @package evstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Add Custom Controls
 */
//require_once trailingslashit( dirname(__FILE__) ) . 'custom-controls.php';


if ( ! function_exists( 'evstrap_child_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function evstrap_child_theme_customize_register( $wp_customize ) {

		/**
		 * Theme layout options.
		 */ 
		$wp_customize->add_section(
			'evstrap_child_ticket_options',
			array(
				'title'       => __( 'BVJ Ticket Settings', 'evstrap' ),
				'capability'  => 'edit_theme_options',
				'description' => __( 'Container width and sidebar defaults', 'evstrap' ),
			)
		);

			// Container Type
			$wp_customize->add_setting(
				'evstrap_child_buy_tickets_url',
				array(
					'default'           => '',
					'type'              => 'theme_mod',
					//'sanitize_callback' => 'evstrap_switch_sanitization',
					'capability'        => 'edit_theme_options',
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'evstrap_child_buy_tickets_url',
					array(
						'label'       => __( 'BVJ Festival Ticketing URL ', 'evstrap_child' ),
						'description' => __( 'Add the Festival Ticketing URL here to set the destination for msot Buy Tickets links across the site', 'evstrap_child' ),
						'section'     => 'evstrap_child_ticket_options',
						'options'    => 'evstrap_child_buy_tickets_url',
						'type'        => 'url',
					)
				)
			);

	}
} // endif function_exists( 'evstrap_child_theme_customize_register' ).
add_action( 'customize_register', 'evstrap_child_theme_customize_register' );