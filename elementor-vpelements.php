<?php
/**
 * Plugin Name: VPElements | Custom Elementor Widgets
 * Description: Additional custom widgets for Elementor
 * Plugin URI:  https://vladparole.info/elementor_widget
 * Version:     1.0.0
 * Author:      Vlad Parole
 * Author URI:  https://vladparole.info/
 * Text Domain: elementor-vpelements
 *
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'vpElements',
		[
			'title' => esc_html__( 'VPElements', 'elementor-vpelements' ),
			'icon' => 'fa fa-plug',
		]
	);
}

add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );

function runplugin() {

	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );

	// Run the plugin
	\Elementor_VPElements\Plugin::instance();

}

add_action( 'plugins_loaded', 'runplugin' );

