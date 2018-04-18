<?php
/**
 * Plugin Name: EPFL Map shortcode
 * Description: provides a shortcode to display a map from map.epfl.ch
 *
 * @version    1.0
 * @copyright  Copyright (c) 2017 Ecole Polytechnique Federale de Lausanne, Switzerland
 * @package    epfl-map
 */

/**
 * Execute the shortcode
 *
 * @param array  $attributes array of all input parameters.
 * @param string $content the content of the shortcode. In our case the content is empty.
 * @return html of shortcode
 */
function epfl_map_process_shortcode( $attributes, string $content = null ) {
	// get parameters.
	$atts = shortcode_atts(
		array(
			'width'  => '',
			'height' => '',
			'query'  => '',
			'lang'   => '',
		), $attributes
	);

	// sanitize parameters.
	$width  = sanitize_text_field( $atts['width'] );
	$height = sanitize_text_field( $atts['height'] );
	$query  = sanitize_text_field( $atts['query'] );
	$lang   = sanitize_text_field( $atts['lang'] );

	return $width;
}

add_shortcode( 'epfl_map', 'epfl_map_process_shortcode' );


