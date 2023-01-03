<?php

declare(strict_types = 1);

namespace Drupal\color_field\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'color_type' field type.
 *
 * @FieldType(
 *   id = "state_field_type",
 *   label = @Translation("State Field"),
 *   description = @Translation("State to select and corresponding Image to display."),
 * )
 */
class StateFieldType extends FieldItemBase {

   /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition): array {
   return [
      'columns' => [
        'rowId' => [
          'description' => 'Row ID of the field',
          'type' => 'int',
          'size' => 'small',
          'not null' => TRUE,
          'default' => $field_definition->getSetting('rowId_default_value'),
        ],
        'columnId' => [
          'description' => 'Column ID of the field',
          'type' => 'int',
          'size' => 'small',
          'not null' => TRUE,
          'default' => $field_definition->getSetting('columnId_default_value'),
        ],
        'Option' => [
          'description' => 'Selected an option',
          'type' => 'varchar',
          'size' => $field_definition->getSetting('Option_Length'),
          'not null' => TRUE,
          'default' => $field_definition->getSetting('Option_default_value'),
        ]
      ]
    ];
  }
   /**
     * {@inheritdoc}
     */
    public static function defaultStorageSettings() {
      return [
        'rowId_Max_Limit'         => (int)10,
        'columnId_Max_Limit'      => (int)10,
        'rowId_default_value'     => (int)0,
        'columnId_default_value'  => (int)0,
        'Option_Length'           => (int)264,
        'Option_default_value'    => 'None',
      ] + parent::defaultStorageSettings();
    }

    /**
     * {@inheritdoc}
     */
    public static function defaultFieldSettings() {
      return [
        'available_states' => [],
        'available_images' => [],
      ] + parent::defaultFieldSettings();
    }
}


