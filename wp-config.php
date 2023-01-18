<?php
$table_prefix = 'wpql_';

// Keep plugin/theme code dir outside WP core.
define('WP_CONTENT_DIR', __DIR__ . '/wp-content');

// Load local-environment settings: database, url etc.
if (file_exists(__DIR__ . '/wp-config-local.php')) {
  require(__DIR__ . '/wp-config-local.php');
}

// Finish setting variables after loading local settings.
if (!defined('WP_HOME')) {
  if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
    define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);
  }
  else {
    define('WP_HOME', 'https://' . $_SERVER['SERVER_NAME']);
  }
}
if (!defined('WP_SITEURL')) {
  define('WP_SITEURL', WP_HOME . '/wp');
}

define('WP_CONTENT_URL', WP_HOME . '/wp-content');

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
