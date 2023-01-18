<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Needed because wp code is in subfolder */
$subfolder = 'wp/';
// Keep plugin/theme code dir outside WP core.
define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/' . $subfolder . 'wp-blog-header.php';
