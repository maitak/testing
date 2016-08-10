<?php

namespace Drupal\library\Plugin\Field\FieldType;

use Drupal\Component\Utility\Random;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslationWrapper;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'library_item_field_type' field type.
 *
 * @FieldType(
 *   id = "library_item_field_type",
 *   label = @Translation("Library item"),
 *   description = @Translation("Library item"),
 *   default_widget = "library_item_field_widget",
 *   default_formatter = "library_item_field_formatter"
 * )
 */
class LibraryItemFieldType extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    // Prevent early t() calls by using the TranslationWrapper.
    $properties['item_id'] = DataDefinition::create('string')
      ->setLabel(new TranslationWrapper('Text value'))
      ->setRequired(TRUE);

    $properties['barcode'] = DataDefinition::create('string')
      ->setLabel(new TranslationWrapper('Barcode'))
      ->setRequired(FALSE);

    $properties['in_circulation'] = DataDefinition::create('integer')
      ->setLabel(new TranslationWrapper('In circulation'))
      ->setRequired(TRUE);

    $properties['library_status'] = DataDefinition::create('integer')
      ->setLabel(new TranslationWrapper('Library satus'))
      ->setRequired(TRUE);

    $properties['notes'] = DataDefinition::create('string')
      ->setLabel(new TranslationWrapper('Notes'))
      ->setRequired(FALSE);

    $properties['created'] = DataDefinition::create('integer')
      ->setLabel(new TranslationWrapper('Created'));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    $schema = array(
      'columns' => array(
        'item_id' => array(
          'type' => 'int',
          'not null' => TRUE,
        ),
        'barcode' => array(
          'type' => 'varchar',
          'length' => 80,
          'not null' => FALSE,
        ),
        // TODO: make it a list.
        'in_circulation' => array(
          'type' => 'int',
          'not null' => TRUE,
          'default' => 0,
        ),
        // TODO: Make it a list.
        'library_status' => array(
          'type' => 'int',
          'not null' => TRUE,
          'default' => 0,
        ),
        'notes' => array(
          'type' => 'text',
        ),
        // todo: make it a datetime.
        'created' => array(
          'type' => 'int',
        ),
      ),
    );

    return $schema;
  }

  /**
   * {@inheritdoc}
   */
  public function getConstraints() {
    $constraints = parent::getConstraints();
    // todo: add missing constraints
    /*
    if ($max_length = $this->getSetting('max_length')) {
    $constraint_manager = \Drupal::typedDataManager()->getValidationConstraintManager();
    $constraints[] = $constraint_manager->create('ComplexData', array(
    'value' => array(
    'Length' => array(
    'max' => $max_length,
    'maxMessage' => t('%name: may not be longer than @max characters.', array(
    '%name' => $this->getFieldDefinition()->getLabel(),
    '@max' => $max_length
    )),
    ),
    ),
    ));
    }

     */

    return $constraints;
  }

  /**
   * {@inheritdoc}
   */

  /**
   * Todo: remove example / add again.
   */
  public static function generateSampleValue(FieldDefinitionInterface $field_definition) {
    $random = new Random();
    $values['value'] = $random->word(mt_rand(1, $field_definition->getSetting('max_length')));
    return $values;
  }

  /**
   * {@inheritdoc}
   */
  public function storageSettingsForm(array &$form, FormStateInterface $form_state, $has_data) {
    $elements = [];

    // todo: remove example
    // todo: add barcode setting.
    $elements['max_length'] = array(
      '#type' => 'number',
      '#title' => t('Maximum length'),
      '#default_value' => $this->getSetting('max_length'),
      '#required' => TRUE,
      '#description' => t('The maximum length of the field in characters.'),
      '#min' => 1,
      '#disabled' => $has_data,
    );

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $value = $this->get('item_id')->getValue();
    return $value === NULL || $value === '';
  }

}
