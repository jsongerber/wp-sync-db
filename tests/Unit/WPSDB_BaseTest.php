<?php

namespace WPSDB\Tests\Unit;

use WPSDB\Tests\TestCase;
use WPSDB\WPSDB_Base;

class WPSDB_BaseTest extends TestCase
{
  public function test_verify_signature_accepts_data_signed_with_same_key()
  {
    $base = $this->make(WPSDB_Base::class);
    $data = ['action' => 'wpsdb_verify_connection_to_remote_site', 'intent' => 'pull'];
    $data['sig'] = $base->create_signature($data, 'secret-key');

    $this->assertTrue($base->verify_signature($data, 'secret-key'));
  }

  public function test_verify_signature_rejects_data_when_key_differs()
  {
    $base = $this->make(WPSDB_Base::class);
    $data = ['action' => 'wpsdb_verify_connection_to_remote_site', 'intent' => 'pull'];
    $data['sig'] = $base->create_signature($data, 'secret-key');

    $this->assertFalse($base->verify_signature($data, 'other-key'));
  }

  public function test_verify_signature_rejects_data_when_payload_was_tampered()
  {
    $base = $this->make(WPSDB_Base::class);
    $data = ['action' => 'wpsdb_verify_connection_to_remote_site', 'intent' => 'pull'];
    $data['sig'] = $base->create_signature($data, 'secret-key');
    $data['intent'] = 'push';

    $this->assertFalse($base->verify_signature($data, 'secret-key'));
  }

  public function test_verify_signature_rejects_data_when_signature_missing()
  {
    $base = $this->make(WPSDB_Base::class);

    $this->assertFalse($base->verify_signature(['intent' => 'pull'], 'secret-key'));
  }

  public function test_verify_signature_ignores_nonce_when_nonce_added_after_signing()
  {
    $base = $this->make(WPSDB_Base::class);
    $data = ['intent' => 'pull'];
    $data['sig'] = $base->create_signature($data, 'secret-key');
    $data['nonce'] = 'abc123';

    $this->assertTrue($base->verify_signature($data, 'secret-key'));
  }
}
