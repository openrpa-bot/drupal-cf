<?php

//declare(strict_types = 1);

namespace Drupal\string_field\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Plugin implementation of the 'state_field' field type.
 *
 * @FieldType(
 *   id = "string_field_type",
 *   label = @Translation("My String Field"),
 *   description = @Translation("State to select and corresponding Image to display."),
 *   default_widget = "string_field_widget",
 *   default_formatter = "string_field_formatter",
 * )
 */
class StringFieldType extends FieldItemBase {

   /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition): array {
   return [
      'columns' => [
        'Option' => [
          'description' => 'Selected an option',
          'type' => 'varchar',
          'length' => 200,
          'not null' => TRUE,
          'default' => 'default',
        ]
      ]
    ];
  }

    /**
           * {@inheritdoc}
           */
          public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
           $properties['Option'] = DataDefinition::create('string')
              ->setLabel(t('Option'))
              ->setDescription(t('Selected the Option.'))
              ->setRequired(TRUE);

            return $properties;
          }

}


