<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package: statictheme_underscore
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function statictheme_underscore_infinite_scroll_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'statictheme_underscore_infinite_scroll_setup' );
