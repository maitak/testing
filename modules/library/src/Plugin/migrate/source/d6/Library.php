<?php

namespace Drupal\library\Plugin\migrate\source\d6;

use Drupal\migrate_drupal\Plugin\migrate\source\DrupalSqlBase;

/**
 * Drupal 6 library source.
 *
 * @MigrateSource(
 *   id = "d6_library"
 * )
 */
class Library extends DrupalSqlBase {

  /**
   * {@inheritdoc}
   */
  public function query() {
    $query = $this->select('library', 'l')->fields('l');
    return $query;
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    $ids['id']['type'] = 'integer';
    return $ids;
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    return array(
      'id' => $this->t('Library item ID'),
      'barcode' => $this->t('Barcode'),
      'nid' => $this->t('Node ID'),
      'in_circulation' => $this->t('Circulation status'),
      'library_status' => $this->t('Item status in library'),
      'notes' => $this->t('Notes on item'),
      'created' => $this->t('Created'),
    );
  }

}
