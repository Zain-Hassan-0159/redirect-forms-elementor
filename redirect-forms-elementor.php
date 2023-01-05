<?php

/**
 * Plugin Name:       Redirect Forms Elementor
 * Description:       Redirect Forms Elementor is created by Zain Hassan.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Zain Hassan
 * Author URI:        https://hassanzain.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       redirect-forms
*/

if(!defined('ABSPATH')){
exit;
}


function add_redirectForms_category( $elements_manager ) {

	$elements_manager->add_category(
		'el-customWidgets',
		[
			'title' => esc_html__( 'Custom Widgets', 'redirect-forms' ),
			'icon' => 'fa fa-plug',
		]
	);



}
add_action( 'elementor/elements/categories_registered', 'add_redirectForms_category' );

/**
 *  Elementor Custom Widget
*/
function register_redirectForm_elementor_widgets( $widgets_manager ) {
    /** Forms Widget **/
	require_once( __DIR__ . '/inc/forms.php' );
	$widgets_manager->register( new \forms_widget_custom_elementor );

}
add_action( 'elementor/widgets/register', 'register_redirectForm_elementor_widgets' );


