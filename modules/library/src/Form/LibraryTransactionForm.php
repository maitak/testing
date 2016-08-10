<?php

namespace Drupal\library\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class LibraryTransactionForm.
 *
 * @package Drupal\library\Form
 */
class LibraryTransactionForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $library_transaction = $this->entity;

    $form['id'] = array(
      '#type' => 'machine_name',
      '#default_value' => $library_transaction->id(),
      '#machine_name' => array(
        'exists' => '\Drupal\library\Entity\LibraryTransaction::load',
      ),
      '#disabled' => !$library_transaction->isNew(),
    );

    $form['item_id'] = array(
      '#type' => 'text',
      '#default_value' => $library_transaction->item_id(),
    );

    $form['nid'] = array(
      '#type' => 'text',
      '#default_value' => $library_transaction->nid(),
    );

    $form['uid'] = array(
      '#type' => 'text',
      '#default_value' => $library_transaction->uid(),
    );

    $form['action_aid'] = array(
      '#type' => 'text',
      '#default_value' => $library_transaction->action_aid(),
    );

    $form['duedate'] = array(
      '#type' => 'date',
      '#default_value' => $library_transaction->duedate(),
    );

    $form['notes'] = array(
      '#type' => 'text',
      '#default_value' => $library_transaction->notes(),
    );

    $form['created'] = array(
      '#type' => 'text',
      '#default_value' => $library_transaction->created(),
      '#disabled' => 'true',
    );

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $library_transaction = $this->entity;
    $status = $library_transaction->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Library transaction.', [
          '%label' => $library_transaction->id(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Library transaction.', [
          '%label' => $library_transaction->id(),
        ]));
    }
    $form_state->setRedirectUrl($library_transaction->urlInfo('collection'));
  }

}
