<?php

/**
 * @file
 * Contains Drupal\hello\HelloEntityAccessControlHandler.
 */

namespace Drupal\hello;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Hello entity entity.
 *
 * @see \Drupal\hello\Entity\HelloEntity.
 */
class HelloEntityAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, $langcode, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view hello entity entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit hello entity entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete hello entity entities');
    }

    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add hello entity entities');
  }

}
