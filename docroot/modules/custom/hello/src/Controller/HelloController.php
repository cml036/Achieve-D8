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

    //$form =  \Drupal::formBuilder()->getForm('Drupal\hello\Form\HelloForm');
    //$values = $form_state.getValue('')
    //$message = t('Your message is @message', array('@message' => $form_state->getValues()['message']));

    $build = array(
      '#type' => 'markup',
      '#markup' => t('Hello World!'),
    );
    return $build;
  }

}
