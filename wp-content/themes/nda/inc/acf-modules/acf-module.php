<?php

//France Gallery Section
// add_action('acf/init', 'nda_init_france_gallery');
// function nda_init_france_gallery() {
// 	if (function_exists('acf_register_block')) {
// 		acf_register_block(array(
// 			'name'				=> 'france-gallery',
// 			'title'				=> __('France Gallery Section', 'nda'),
// 			'description'		=> __('A custom France Gallery Section block.', 'nda'),
// 			'render_callback'	=> 'nda_block_render_callback',
// 			'category'			=> 'formatting',
// 			'icon'				=> 'admin-comments',
// 			'keywords'			=> array('france-gallery', 'quote'),
// 		));
// 	}
// }

// function nda_block_render_callback($block) {
// 	$slug = str_replace('acf/', '', $block['name']);
// 	if (file_exists(get_theme_file_path("/template-parts/block/content-{$slug}.php"))) {
// 		include(get_theme_file_path("/template-parts/block/content-{$slug}.php"));
// 	}
// }

function register_acf_block_types() {
	// register a france-gallery block.
	acf_register_block_type(array(
	   'name'              => 'france-gallery',
	   'title'             => __('France Gallery Section'),
	   'description'       => __('A custom France Gallery block.'),
	   'render_template'   => 'template-parts/block/france-gallery.php',
	   'category'          => 'formatting',
	   'icon'              => 'admin-comments',
	   'keywords'          => array( 'france-gallery', 'quote' ),
	));
 }
 // Check if function exists and hook into setup.
 if( function_exists('acf_register_block_type') ) {
	add_action('acf/init', 'register_acf_block_types');
 }
?>