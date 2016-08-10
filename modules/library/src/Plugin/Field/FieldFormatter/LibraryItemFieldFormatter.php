<?php

namespace Drupal\library\Plugin\Field\FieldFormatter;

use Drupal\Component\Utility\SafeMarkup;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Plugin implementation of the 'library_item_field_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "library_item_field_formatter",
 *   label = @Translation("Library item formatter"),
 *   field_types = {
 *     "library_item_field_type"
 *   }
 * )
 */
class LibraryItemFieldFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return array(
      // Implement default settings.
    ) + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    return array(
      // Implement settings form.
    ) + parent::settingsForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    // Implement settings summary.
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = array(
      '#type' => 'table',
      '#title' => t('Library items'),
      '#header' => array('Barcode', 'In circulation', 'Library status', 'Notes', 'Actions'),
    );
    // Todo: Validate and escape.
    $rows = [];
    foreach ($items as $delta => $item) {
      $rows[$delta]['barcode'] = $this->viewBarcode($item);
      $rows[$delta]['in_circulation'] = $this->viewNotes($item);
      $rows[$delta]['library_status'] = $this->viewNotes($item);
      $rows[$delta]['notes'] = $this->viewNotes($item);

      $actions = $this->getActions($item);
      foreach ($actions as $key => $action) {
        $links[] = array(
          'title' => $action['title'],
          'url' => $action['link'],
        );
      }
      $rows[$delta]['actions'] = array(
        '#type' => 'operations',
        '#links' => $links,
      );

    }
    $elements['#rows'] = $rows;
    return $elements;
  }

  /**
   * Generate the output appropriate for one field item.
   *
   * @param \Drupal\Core\Field\FieldItemInterface $item
   *   One field item.
   *
   * @return string
   *   The textual output generated.
   */
  protected function viewBarcode(FieldItemInterface $item) {
    // The text value has no text format assigned to it, so the user input
    // should equal the output, including newlines.
    if (!empty($item->barcode)) {
      return nl2br(SafeMarkup::checkPlain($item->barcode));
    }
    else {
      return $item->name + 1;
    }
  }

  /**
   *
   */
  protected function viewNotes(FieldItemInterface $item) {
    // The text value has no text format assigned to it, so the user input
    // should equal the output, including newlines.
    if (!empty($item->notes)) {
      return nl2br(SafeMarkup::checkPlain($item->notes));
    }
  }

  /**
   * Generate the output appropriate for one field item.
   *
   * @param \Drupal\Core\Field\FieldItemInterface $item
   *   One field item.
   *
   * @return string
   *   The textual output generated.
   */
  protected function getActions(FieldItemInterface $item) {
    // Todo: Remove stub
    // Todo: Use URL generation, i.e. Url::fromRoute('mymodule.manage_edit', array('id' => $id)),.
    return array(
      'edit' => array('title' => t('Check out'), 'link' => Url::fromRoute('<front>')),
      'delete' => array('title' => t('Renew'), 'link' => Url::fromRoute('<front>')),
    );
  }

}
