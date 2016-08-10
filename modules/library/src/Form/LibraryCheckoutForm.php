<?php

namespace Drupal\library\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use MyProject\Proxies\__CG__\stdClass;

/**
 *
 */
class LibraryCheckoutForm extends FormBase {

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'library_checkout_form';
  }

  /**
   * Form constructor.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form structure.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    // TODO: Missing.
    $action = new stdClass();
    // TODO missing context.
    $item = new stdClass();
    // TODO: Missing context.
    $patron = new stdClass();
    // TODO: Missing context.
    $librarian = new stdClass();

    $form['action_aid'] = array(
      '#type' => 'value',
      '#value' => $action->aid,
    );
    $form['action_name'] = array(
      '#type' => 'value',
      '#value' => $action->name,
    );
    $form['action_status_change'] = array(
      '#type' => 'value',
      '#value' => $action->status_change,
    );

    if ($item) {
      $form['item_id'] = array(
        '#type' => 'value',
        '#value' => $item->id,
      );
      $form['item_id_set'] = array(
        '#type' => 'value',
        '#value' => $item->id,
      );
      $form['item_display'] = array(
        '#type' => 'item',
        '#title' => t('Item'),
        '#value' => $item->title,
      );
    }
    else {
      $form['item_id'] = library_autocomplete_input($item);
    }

    if ($patron) {
      $form['patron_uid'] = array(
        '#type' => 'value',
        '#value' => $patron->uid,
      );
      $form['patron_uid_set'] = array(
        '#type' => 'value',
        '#value' => $patron->uid,
      );
      $form['patron_display'] = array(
        '#type' => 'item',
        '#value' => $patron->name,
        '#title' => t('Patron'),
      );
      if ($librarian && $action->status_change == LIBRARY_ACTION_NO_CHANGE) {
        $link = 'library-items/transaction/' . $action->aid;
        if ($item) {
          $link .= '/' . $item->id;
        }
        $form['patron_change_link'] = array(
          '#type' => 'item',
          '#value' => 'Change Patron',
          '#prefix' => '<a href="' . url($link) . '">',
          '#suffix' => '</a>',
        );
      }
    }
    elseif (variable_get('library_disable_patron_autocomplete', 0) == 1) {
      $form['patron_uid'] = array(
        '#type' => 'textfield',
        '#title' => t('Patron'),
        '#default_value' => '',
        '#required' => TRUE,
      );
    }
    else {
      $form['patron_uid'] = array(
        '#type' => 'textfield',
        '#title' => t('Patron'),
        '#default_value' => ($patron ? $patron->name . ' [uid:' . $patron->uid . ']' : ''),
        '#autocomplete_path' => 'patrons/autocomplete',
        '#required' => TRUE,
      );
    }

    $form['notes'] = array(
      '#type' => 'textarea',
      '#title' => t('Message'),
      '#required' => FALSE,
      '#maxlength' => 250,
      '#default_value' => '',
      '#description' => t('If you are reserving an item, make sure to include the date and time you would like it to be ready.'),
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t($action->name),
    );
    $form['#validate'][] = 'library_transaction_form_validate';
    $form['#submit'][] = 'library_transaction_form_submit';

    return $form;
  }

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // TODO: Implement submitForm() method.
  }

}
