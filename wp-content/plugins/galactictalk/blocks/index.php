<?php
/**
 * Functions to register client-side assets (scripts and stylesheets) for the
 * Gutenberg block.
 *
 * @package GalacticTalk
 */

/**
 * Adds GalacticTalk block category
 */
add_filter(
	'block_categories_all',
	function ( $categories ) {
		$categories[] = array(
			'slug'  => 'galactictalk',
			'title' => 'ギャラクティックトーク',
		);

		return $categories;
	}
);

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * @see https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
add_action(
	'init',
	function () {
		// Skip block registration if Gutenberg is not enabled/merged.
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}

		// Get the paths to the build directory and register all the block types contained within it.
		foreach ( glob( __DIR__ . '/build/blocks/*' ) as $path ) {
			register_block_type( $path );
		}
	}
);

/**
 * Register custom block styles
 */
add_action(
	'init',
	function () {
		register_block_style(
			'core/heading',
			array(
				'name'  => 'only-text',
				'label' => 'テキストのみ',
			)
		);
	},
	99
);
