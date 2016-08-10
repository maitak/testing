<?php

namespace Drupal\library;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Provides a listing of Library transaction entities.
 */
class LibraryTransactionListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['label'] = $this->t('Library transaction');
    $header['id'] = $this->t('Machine name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['label'] = $this->getLabel($entity);
    $row['id'] = $entity->id();
    $row['item_id'] = $entity->item_id();
    $row['nid'] = $entity->nid();
    $row['uid'] = $entity->uid();
    $row['action_aid'] = $entity->action_aid();
    $row['duedate'] = $entity->duedate();
    $row['notes'] = $entity->notes();
    $row['created'] = $entity->created();

    // You probably want a few more properties here...
    return $row + parent::buildRow($entity);
  }

}
