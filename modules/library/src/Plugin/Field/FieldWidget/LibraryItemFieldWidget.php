<?php

namespace Drupal\library\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'library_item_field_widget' widget.
 *
 * @FieldWidget(
 *   id = "library_item_field_widget",
 *   label = @Translation("Library item widget"),
 *   field_types = {
 *     "library_item_field_type"
 *   }
 * )
 */
class LibraryItemFieldWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {

    // TODO: Inline elements
    // TODO: Auto-increment / default value item_id
    // Todo: Add default status to in_circulation / library_status.
    $element['item_id'] = array(
      '#type' => 'hidden',
      '#default_value' => isset($items[$delta]->item_id) ? $items[$delta]->item_id : '99999',
    );
    $element['barcode'] = array(
      '#type' => 'textfield',
      '#default_value' => isset($items[$delta]->barcode) ? $items[$delta]->barcode : NULL,
      '#size' => $this->getSetting('size'),
      '#maxlength' => $this->getFieldSetting('max_length'),
      '#title' => t('Barcode'),
    );
    $element['in_circulation'] = array(
      '#type' => 'checkbox',
      '#default_value' => isset($items[$delta]->in_circulation) ? $items[$delta]->in_circulation : 0,
      '#title' => t('In circulation'),
    );
    $element['library_status'] = array(
      '#type' => 'checkbox',
      '#default_value' => isset($items[$delta]->library_status) ? $items[$delta]->library_status : 0,
      '#title' => t('Library status'),
    );
    $element['notes'] = array(
      '#type' => 'textfield',
      '#default_value' => isset($items[$delta]->notes) ? $items[$delta]->notes : NULL,
      '#size' => $this->getSetting('size'),
      '#maxlength' => $this->getFieldSetting('max_length'),
      '#title' => t('Notes'),
    );
    $element['created'] = array(
      '#type' => 'hidden',
      '#default_value' => isset($items[$delta]->created) ? $items[$delta]->created : time(),
      '#size' => $this->getSetting('size'),
    );

    return $element;
  }

}
