<?php
/**
 * Plugin Name: AGBI Shorthand Embed
 * Description: Register a new handler for Shorthand URL's
 * Version: 1.0
 * Author: Human Made Limited
 * Author URI: https://humanmade.com
 * License: GPL2
 */

wp_embed_register_handler(
	'shorthand',
	'#(https?://\w.+\.shorthandstories\.com/\w.+)#i',
	function( $matches ) {
		$embed = sprintf(
			'<script src="%sembed.js"></script>',
			esc_attr( $matches[1] )
		);
		return $embed;
	}
);
