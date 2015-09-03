<?php

/**
 * @file
 * Contains Drupal\hello\HelloEntityInterface.
 */

namespace Drupal\hello;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Hello entity entities.
 *
 * @ingroup hello
 */
interface HelloEntityInterface extends ContentEntityInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.

}
