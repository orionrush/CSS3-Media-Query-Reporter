<?php
if ( ! defined( 'ABSPATH' ) ) die();
/*
Plugin Name: Dynamic CSS3 Media Reporter
Description: Based on the work of David Cochran. CSS3 @media rule reproter visable on the front end, only by admins.
Version: 0.1
License: GPL
Author: Ben Rush
Author URI: http://www.orionrush.com
Author URI: https://github.com/davidcochran/CSS3-Media-Query-Reporter
*/

/***********************************************************************
 * Definitions
/*********************************************************************/
define('TR_REPORTER_URI', 	plugin_dir_url( __FILE__ ));

/***********************************************************************
 * Load the style only for admins viewing the front end
/*********************************************************************/
// We cant check for user rights too soon, so either we require_once pluggable.php like so: //require_once(ABSPATH . 'wp-includes/pluggable.php');
// or better yet we add our styles after plugable is loaded:
add_action('plugins_loaded', 'rportr_plugins_loaded');
function rportr_plugins_loaded() {
	if( current_user_can( 'manage_options' ) && !is_admin() ) {
		add_action( 'wp_enqueue_scripts', '_tr_reportr_CSS' );
		add_action( 'wp_print_scripts', '_tr_reportr_JS', 10 );
	}
}
function _tr_reportr_CSS(){
	wp_register_style( 'CSS3reporterCSS', TR_REPORTER_URI . 'css/reporter.css', '', '0.1', $media = 'screen' );
	wp_register_script( 'CSS3reporterjs', TR_REPORTER_URI . 'js/reporter.js', array('jquery'), '0.1', true );

}
function _tr_reportr_JS(){
	wp_enqueue_style('CSS3reporterCSS');
	wp_enqueue_script('CSS3reporterjs');
}
