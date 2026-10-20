<?php

namespace WPSDB\Tests;

use Brain\Monkey;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
  use MockeryPHPUnitIntegration;

  protected function setUp(): void
  {
    parent::setUp();
    Monkey\setUp();
  }

  protected function tearDown(): void
  {
    Monkey\tearDown();
    $_POST = [];
    parent::tearDown();
  }

  /**
   * Instantiate a plugin class without running its constructor, which
   * registers hooks and reads options. Set needed properties explicitly.
   */
  protected function make(string $class)
  {
    return (new \ReflectionClass($class))->newInstanceWithoutConstructor();
  }
}
