<?php

namespace WPSDB\Tests\Unit;

use Brain\Monkey\Functions;
use WPSDB\Tests\TestCase;
use WPSDB\WPSDB;

class WPSDBTest extends TestCase
{
  public function test_sign_remote_post_data_drops_fields_the_remote_does_not_verify_when_post_has_extra_fields()
  {
    $wpsdb = $this->make(WPSDB::class);
    $data = [
      'action' => 'wpsdb_process_pull_request',
      'intent' => 'pull',
      'url' => 'https://lyoxa.example',
      'key' => 'remote-secret-key',
      'table' => 'wp_posts',
      'nonce' => 'a1b2c3d4e5',
      'pll_ajax_backend' => '1',
      'pull_limit' => '1048576',
    ];

    $signed = $wpsdb->sign_remote_post_data($data, 'remote-secret-key');

    $this->assertArrayNotHasKey('pll_ajax_backend', $signed);
    $this->assertArrayNotHasKey('nonce', $signed);
    $this->assertSame('wp_posts', $signed['table']);
    $this->assertArrayHasKey('sig', $signed);
  }

  public function test_pull_request_passes_remote_verification_when_local_post_has_polylang_field()
  {
    Functions\stubTranslationFunctions();
    Functions\when('get_option')->justReturn('');
    Functions\when('update_option')->justReturn(true);
    // Local $_POST as sent by script.js with Polylang active, already
    // WP-slashed, then adjusted the way ajax_migrate_table does for a pull
    $data = [
      'action' => 'wpsdb_process_pull_request',
      'intent' => 'pull',
      'url' => 'https://lyoxa.example',
      'key' => 'remote-secret-key',
      'form_data' => 'action=pull&connection_info=https%3A%2F%2Flyoxa.example%0D%0Aremote-secret-key&replace_old%5B%5D=%2F%2Flyoxa.example&replace_new%5B%5D=%2F%2Flyoxa.test',
      'stage' => 'migrate',
      'bottleneck' => '1048576',
      'prefix' => 'wp_',
      'current_row' => '120',
      'dump_filename' => 'lyoxa-migrate-20261020101500',
      'last_table' => '0',
      'gzip' => '1',
      'primary_keys' => 'a:1:{s:2:"ID";s:3:"120";}',
      'table' => 'wp_posts',
      'pll_ajax_backend' => '1',
      'pull_limit' => '1048576',
    ];
    $local = $this->make(WPSDB::class);
    $sent = $local->sign_remote_post_data($data, 'remote-secret-key');

    // Remote side: WordPress slashes the incoming POST (wp_magic_quotes)
    $_POST = array_map('addslashes', $sent);
    $remote = $this->make(WPSDB::class);
    $this->set_property($remote, 'settings', ['key' => 'remote-secret-key', 'allow_pull' => false]);
    $this->set_property($remote, 'invalid_content_verification_error', 'Invalid content verification signature');
    $remote->set_cli_migration();

    $result = $remote->respond_to_process_pull_request();

    // Signature accepted; the request then stops at the allow_pull check
    $this->assertStringNotContainsString('(#124)', $result);
    $this->assertStringContainsString('(#132)', $result);
  }

  private function set_property($object, $name, $value)
  {
    $property = new \ReflectionProperty($object, $name);
    if (PHP_VERSION_ID < 80100) {
      $property->setAccessible(true);
    }
    $property->setValue($object, $value);
  }
}
