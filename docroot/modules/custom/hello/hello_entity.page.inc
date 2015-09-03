<?php

/**
 * @file
 * Contains hello_entity.page.inc.
 *
 * Page callback for Hello entity entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Hello entity templates.
 *
 * Default template: hello_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_hello_entity(array &$variables) {
  // Fetch HelloEntity Entity Object.
  $hello_entity = $variables['elements']['#hello_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
