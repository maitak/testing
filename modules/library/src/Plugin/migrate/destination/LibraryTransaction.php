<?php

namespace Drupal\library\Plugin\migrate\destination;

use Drupal\Core\Entity\EntityInterface;
use Drupal\migrate\Plugin\migrate\destination\EntityContentBase;
use Drupal\migrate\Row;

/**
 * @MigrateDestination(
 *   id = "library_transaction",
 *   provider = "library"
 * )
 */
class LibraryTransaction extends EntityContentBase {

  /**
   * {@inheritdoc}
   */
  protected static function getEntityTypeId($plugin_id) {
    return 'library_transaction';
  }

  /**
   * {@inheritdoc}
   */
  protected function updateEntity(EntityInterface $entity, Row $row) {
    /* TODO: does not make sense, just copied from Book module, need to do this proper */
    $entity->library_transaction = $row->getDestinationProperty('library_transaction');
  }

}
