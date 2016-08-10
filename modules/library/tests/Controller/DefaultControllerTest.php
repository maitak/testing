<?php

namespace Drupal\library\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the library module.
 */
class DefaultControllerTest extends WebTestBase {

  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "library DefaultController's controller functionality",
      'description' => 'Test Unit for module library and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests library functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module library.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
