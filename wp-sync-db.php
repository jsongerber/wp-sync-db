<?php
/*
Plugin Name: WP Sync DB
Description: Export, push, and pull to migrate your WordPress databases.
Author: Jason Gerber
Version: 2.0.0
Author URI: https://jasongerber.ch
GitHub Plugin URI: jsongerber/wp-sync-db
Release Asset: true
Network: True
*/

if (!file_exists(dirname(__FILE__) . '/lib/autoload.php')) {
  add_action('admin_notices', function () {
    echo '<div class="notice notice-error is-dismissible"><p>' . __('<strong>WB Sync DB Error:</strong> Some files seem to be missing from the installation, if you have manually installed the plugin, please reinstall using the zip in the <a href="https://github.com/jsongerber/wp-sync-db/releases/latest" target="_blank">latest release</a> or follow the instruction in the <a href="https://github.com/jsongerber/wp-sync-db#installation" target="_blank">readme</a>', 'wp-sync-db') . '</p></div>';
  });

  // Disable the plugin
  $url = plugins_url();
  $path = parse_url($url);
  deactivate_plugins('wp-sync-db/wp-sync-db.php');
  return;
}

require_once dirname(__FILE__) . '/lib/autoload.php';

use WPSDB\WPSDB;

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
  if (!is_admin() && ! (class_exists('WP_CLI') && WP_CLI)) return;

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
  load_plugin_textdomain('wp-sync-db-cli', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}

add_action('init', 'wp_sync_db_init');

// module
require_once 'src/Modules/MediaFiles/_load.php';
require_once 'src/Modules/CLI/_load.php';
