<?php

namespace Drupal\library\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\library\LibraryTransactionInterface;

/**
 * Defines the Library transaction entity.
 *
 * @ConfigEntityType(
 *   id = "library_transaction",
 *   label = @Translation("Library transaction"),
 *   handlers = {
 *     "list_builder" = "Drupal\library\LibraryTransactionListBuilder",
 *     "form" = {
 *       "add" = "Drupal\library\Form\LibraryTransactionForm",
 *       "edit" = "Drupal\library\Form\LibraryTransactionForm",
 *       "delete" = "Drupal\library\Form\LibraryTransactionDeleteForm"
 *     }
 *   },
 *   config_prefix = "library_transaction",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/library_transaction/{library_transaction}",
 *     "edit-form" = "/admin/structure/library_transaction/{library_transaction}/edit",
 *     "delete-form" = "/admin/structure/library_transaction/{library_transaction}/delete",
 *     "collection" = "/admin/structure/visibility_group"
 *   }
 * )
 */
class LibraryTransaction extends ConfigEntityBase implements LibraryTransactionInterface {
  /**
   * The Library transaction ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Library item_id.
   *
   * @var string
   */
  protected $item_id;

  /**
   * @return mixed
   */
  public function item_id() {
    return $this->item_id;
  }

  /**
   *
   */
  public function nid() {
    return $this->nid;
  }

  /**
   *
   */
  public function uid() {
    return $this->uid;
  }

  /**
   *
   */
  public function action_aid() {
    return $this->action_aid;
  }

  /**
   *
   */
  public function notes() {
    return $this->notes;
  }

  /**
   *
   */
  public function created() {
    return $this->created;
  }

  /**
   *
   */
  public function duedate() {
    return $this->duedate;
  }

}
