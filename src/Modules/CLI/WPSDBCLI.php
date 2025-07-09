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


    $longest_name_length = 0;
    $lines = [];
    foreach ($wpsdb_settings['profiles'] as $i => $profile) {
      $id = $i + 1;
      $name = $profile['name'] ?? sprintf(__('Profile %d', 'wp-sync-db-cli'), $id);
      $action = strtoupper($profile['action'] ?? '');
      if (strlen($name) > $longest_name_length) {
        $longest_name_length = strlen($name);
      }

      $lines[] = '    %G' . str_pad($id, 6, ' ') . '%n|    %y' . str_pad($action, 10, ' ') . '%n|    ' . $name;
    }

    WP_CLI::log(WP_CLI::colorize('    %GID%n    |    %yAction%n    |    Name'));
    WP_CLI::log(WP_CLI::colorize('-------------------------------' . str_repeat('-', $longest_name_length)));

    foreach ($lines as $line) {
      WP_CLI::log(WP_CLI::colorize($line));
    }
  }
}
