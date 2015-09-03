<?php

/**
 * @file
 * Contains Drupal\hello\Entity\HelloEntity.
 */

namespace Drupal\hello\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Hello entity entities.
 */
class HelloEntityViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['hello_entity']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Hello entity'),
      'help' => $this->t('The Hello entity ID.'),
    );

    return $data;
  }

}
