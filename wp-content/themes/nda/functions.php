<?php
/**
 * nda functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nda
 */

namespace ACME\wd_s;

/**
 * Get all the include files for the theme.
 *
 * @author WebDevStudios
 */
function include_inc_files() {
	$files = [
		'inc/customizer/customizer.php', // Customizer additions.
		'inc/functions/', // Custom functions that act independently of the theme templates.
		'inc/hooks/', // Load custom filters and hooks.
		'inc/post-types/', // Load custom post types.
		'inc/scaffolding/', // Scaffolding.
		'inc/setup/', // Theme setup.
		'inc/shortcodes/', // Load shortcodes.
		'inc/template-tags/', // Custom template tags for this theme.
		'inc/acf-modules/', // Custom ACF Module for this theme.
	];
	wp_enqueue_style('gallery', get_template_directory_uri() . '/src/css/gallery.css', array(), time());

	foreach ( $files as $include ) {
		$include = trailingslashit( get_template_directory() ) . $include;

		// Allows inclusion of individual files or all .php files in a directory.
		if ( is_dir( $include ) ) {
			foreach ( glob( $include . '*.php' ) as $file ) {
				require $file;
			}
		} else {
			require $include;
		}
	}
}
include_inc_files();
