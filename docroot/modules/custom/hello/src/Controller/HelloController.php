<?php

/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloWorldController.
 */

namespace Drupal\hello\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 *
 */
class HelloController extends ControllerBase {

  public function helloPage() {
    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello World!'),
    );
    return $build;
  }

}
