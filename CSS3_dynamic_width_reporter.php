<?php
if ( ! defined( 'ABSPATH' ) ) die();
/*
Plugin Name: CSS3 Dynamic Width Reporter
Description: Based on the work of David Cochran. CSS3 @media rule reporter visible only by admins on the front end.
Version: 0.1
License: GPL
Author: Ben Rush
Author URI: http://www.orionrush.com
Author URI: https://github.com/orionrush/WP-Dynamic-CSS3-Media-Reporter
*/

/***********************************************************************
 * Definitions
/*********************************************************************/

define('DWR_REPORTER_URI', 	plugin_dir_url( __FILE__ ));

/***********************************************************************
 * Load the style only for admins viewing the front end
/*********************************************************************/

add_action('plugins_loaded', 'reporter_plugins_loaded');
function reporter_plugins_loaded() {
	if( current_user_can( 'manage_options' ) && !is_admin() ) {
		add_action( 'wp_enqueue_scripts', 'DWR_reporter_CSS' );
		add_action( 'wp_print_scripts', 'DWR_reporter_JS', 10 );
	}
}

function DWR_reporter_CSS(){
	wp_register_style( 'DWRreporterCSS', DWR_REPORTER_URI . 'css/reporter.css', '', '0.1', $media = 'screen' );
	wp_register_script( 'DWRreporterjs', DWR_REPORTER_URI . 'js/reporter.js', array('jquery'), '0.1', true );

}

function DWR_reporter_JS(){
	wp_enqueue_style('DWRreporterCSS');
	wp_enqueue_script('DWRreporterjs');
}