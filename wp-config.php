<?php
$table_prefix = 'wpql_';

// Keep plugin/theme code dir outside WP core.
define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );

if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/wp-config-local.php' ) ) {
  require( $_SERVER['DOCUMENT_ROOT'] . '/wp-config-local.php' );
}

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
