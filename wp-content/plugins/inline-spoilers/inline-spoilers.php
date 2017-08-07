<?php
/*
Plugin Name: Inline Spoilers
Plugin URI: https://wordpress.org/plugins/inline-spoilers/
Description: The plugin allows to create content spoilers with simple shortcode.
Version: 1.2.5
Author: Sergey Kuzmich
Author URI: http://kuzmi.ch
Text Domain: inline-spoilers
Domain Path: /languages/
License: GPLv2
*/

/**
 * @package Inline Spoilers
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'plugins_loaded', 'is_load_textdomain' );
function is_load_textdomain() {
	load_plugin_textdomain( 'inline-spoilers', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

add_shortcode( 'spoiler', 'is_spoiler_shortcode' );
function is_spoiler_shortcode( $atts, $content ) {
	extract( shortcode_atts( array(
		'title'         => __( 'Spoiler', 'inline-spoilers' ),
		'initial_state' => 'accordion-item'
	), $atts ) );

	$title      = esc_attr( $title );
	$head_class = ( esc_attr( $initial_state ) == 'collapsed' ) ? ' collapsed' : ' expanded';

	$body_atts = ( esc_attr( $initial_state ) == 'collapsed' ) ? 'style="display: none;"' : 'style="display: block;"';

	$output = "<div class=\"accordion-item\">";
	$output .= WP_DEBUG ? "\n" : "";
	$output .= "<div class=\"accordion-item-title" . $head_class . "\" title=\"" . __( 'Expand', 'inline-spoilers' ) . "\">";
	$output .= WP_DEBUG ? "\n" : "";
	$output .= $title;
	$output .= WP_DEBUG ? "\n" : "";
	$output .= "</div>";
	$output .= WP_DEBUG ? " <!-- .accordion-item-title -->\n" : "";
	$output .= "<div class=\"accordion-item-content\" " . $body_atts . ">";
	$output .= WP_DEBUG ? "\n" : "";
    $output .= balanceTags( do_shortcode( $content ), true );
	$output .= WP_DEBUG ? "\n" : "";
	$output .= "</div>";
	$output .= WP_DEBUG ? " <!-- .accordion-item-content -->\n" : "";
	$output .= "</div>";
	$output .= WP_DEBUG ? " <!-- .accordion-item -->\n" : "";

	return $output;
}

