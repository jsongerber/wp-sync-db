<?php

namespace WPSDB\Modules\CLI;

use \WP_CLI;

/**
 * Migrate your DB using WP Sync DB.
 */
class WPSDBCLI
{

  /**
   * Run a migration.
   *
   * ## OPTIONS
   *
   * <profile>
   * : ID of the profile to use for the migration.
   *
   * ## EXAMPLES
   *
   * 	wp wpsdb migrate 1
   *
   * @synopsis <profile>
   *
   * @since 1.0
   */
  public function migrate($args, $assoc_args)
  {
    $profile = $args[0];

    $result = wpsdb_migrate($profile);

    if (true === $result) {
      WP_CLI::success(__('Migration successful.', 'wp-sync-db-cli'));
      return;
    }

    WP_CLI::warning($result->get_error_message());
    return;
  }

  public function profiles()
  {
    $wpsdb_settings = get_option('wpsdb_settings');

    if (!isset($wpsdb_settings['profiles']) || empty($wpsdb_settings['profiles'])) {
      WP_CLI::warning(__('No profiles found.', 'wp-sync-db-cli'));
      return;
    }

    foreach ($wpsdb_settings['profiles'] as $i => $profile) {
      $profile_id = $i + 1;
      $profile_name = $profile['name'] ?? sprintf(__('Profile %d', 'wp-sync-db-cli'), $profile_id);

      WP_CLI::log(WP_CLI::colorize('%G' . $profile_id . '%n ' . $profile_name));
    }
  }
}
