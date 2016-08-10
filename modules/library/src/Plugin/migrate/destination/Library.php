<?php

namespace Drupal\library\Plugin\migrate\destination;

use Drupal\Core\Entity\EntityInterface;
use Drupal\migrate\Plugin\migrate\destination\EntityContentBase;
use Drupal\migrate\Row;

/**
 * @MigrateDestination(
 *   id = "library",
 *   provider = "library"
 * )
 */
class Library extends EntityContentBase {

  /**
   * {@inheritdoc}
   */
  protected static function getEntityTypeId($plugin_id) {
    return 'node';
  }

  /**
   * {@inheritdoc}
   */
  protected function updateEntity(EntityInterface $entity, Row $row) {
    /* TODO: does not make sense, just copied from Book module, need to do this proper */
    $entity->library = $row->getDestinationProperty('library');
  }

}
