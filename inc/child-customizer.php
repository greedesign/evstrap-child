<?php
/**
 * Understrap Child Theme Customizer
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Add Custom Controls
 */
//require_once trailingslashit( dirname(__FILE__) ) . 'custom-controls.php';


if ( ! function_exists( 'understrap_child_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function understrap_child_theme_customize_register( $wp_customize ) {

		/**
		 * Theme layout options.
		 */ 
		$wp_customize->add_section(
			'understrap_child_ticket_options',
			array(
				'title'       => __( 'BVJ Ticket Settings', 'understrap' ),
				'capability'  => 'edit_theme_options',
				'description' => __( 'Container width and sidebar defaults', 'understrap' ),
			)
		);

			// Container Type
			$wp_customize->add_setting(
				'understrap_child_buy_tickets_url',
				array(
					'default'           => '',
					'type'              => 'theme_mod',
					//'sanitize_callback' => 'understrap_switch_sanitization',
					'capability'        => 'edit_theme_options',
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'understrap_child_buy_tickets_url',
					array(
						'label'       => __( 'BVJ Festival Ticketing URL ', 'understrap_child' ),
						'description' => __( 'Add the Festival Ticketing URL here to set the destination for msot Buy Tickets links across the site', 'understrap_child' ),
						'section'     => 'understrap_child_ticket_options',
						'options'    => 'understrap_child_buy_tickets_url',
						'type'        => 'url',
					)
				)
			);

	}
} // endif function_exists( 'understrap_child_theme_customize_register' ).
add_action( 'customize_register', 'understrap_child_theme_customize_register' );