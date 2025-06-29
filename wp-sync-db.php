<?php
/*
Plugin Name: WP Sync DB
Description: Export, push, and pull to migrate your WordPress databases.
Author: Jason Gerber
Version: 1.6.7
Author URI: http://slang.cx
GitHub Plugin URI: jsongerber/wp-sync-db
Network: True
*/

use WPSDB\WPSDB;

require 'vendor/autoload.php';

$GLOBALS['wpsdb_meta']['wp-sync-db']['folder'] = basename(plugin_dir_path(__FILE__));

define('WPSDB_ROOT', plugin_dir_url(__FILE__));

// Define the directory seperator if it isn't already
if (!defined('DS')) {
  if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
    define('DS', '\\');
  } else {
    define('DS', '/');
  }
}

function wp_sync_db_loaded()
{
  // if neither WordPress admin nor running from wp-cli, exit quickly to prevent performance impact
  if (!is_admin() && ! (defined('WP_CLI') && WP_CLI)) return;

  global $wpsdb;
  $wpsdb = new WPSDB(__FILE__);
}

add_action('plugins_loaded', 'wp_sync_db_loaded');

function wp_sync_db_init()
{
  // if neither WordPress admin nor running from wp-cli, exit quickly to prevent performance impact
  if (!is_admin() && ! (defined('WP_CLI') && WP_CLI)) return;

  load_plugin_textdomain('wp-sync-db', false, dirname(plugin_basename(__FILE__)) . '/languages');
  load_plugin_textdomain('wp-sync-db-media-files', false, dirname(plugin_basename(__FILE__)) . '/languages');
  error_log(print_r(dirname(plugin_basename(__FILE__)), true));
}

add_action('init', 'wp_sync_db_init');

// module
require_once 'src/Modules/MediaFiles/_load.php';
// require_once 'module-media-files/_load.php';
