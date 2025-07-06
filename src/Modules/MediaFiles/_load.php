<?php
/*
Origin: http://github.com/wp-sync-db/wp-sync-db-media-files
*/

use WPSDB\Modules\MediaFiles\WPSDB_Media_Files;

if (function_exists('wp_sync_db_media_files_loaded')) {
  // If the deprecated plugin wp-sync-db-media-files is installed
  add_action('admin_notices', function () {
    echo '<div class="notice notice-warning is-dismissible"><p>' . __('The new version of <code>WP Sync DB</code> now includes the media module, we have automatically disabled the now deprecated <code>WP Sync DB Media Files</code> plugin, you can delete it.', 'wp-sync-db-media-files') . '</p></div>';
  });

  // Disable the plugin
  $url = plugins_url();
  $path = parse_url($url);
  deactivate_plugins('wp-sync-db-media-files/wp-sync-db-media-files.php');
}

function wp_sync_db_module_media_files_loaded()
{
  if (! class_exists('WPSDB\WPSDB_Base')) return;

  global $wpsdb_media_files;
  $wpsdb_media_files = new WPSDB_Media_Files(__FILE__);
}

add_action('plugins_loaded', 'wp_sync_db_module_media_files_loaded', 20);
