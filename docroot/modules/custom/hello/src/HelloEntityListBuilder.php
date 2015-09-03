<?php

/**
 * @file
 * Contains Drupal\hello\HelloEntityListBuilder.
 */

namespace Drupal\hello;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Hello entity entities.
 *
 * @ingroup hello
 */
class HelloEntityListBuilder extends EntityListBuilder {
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Hello entity ID');
    $header['name'] = $this->t('Name');
    $header['message'] = $this->t('Message');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\hello\Entity\HelloEntity */
    $row['id'] = $entity->id();
    $row['name'] = \Drupal::l(
      $this->getLabel($entity),
      new Url(
        'entity.hello_entity.edit_form', array(
          'hello_entity' => $entity->id(),
        )
      )
    );
    $row['message'] = $entity->message->value;
    return $row + parent::buildRow($entity);
  }

}
