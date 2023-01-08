<?php

namespace Drupal\string_field\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'string_field' widget.
 *
 * @FieldWidget(
 *   id = "string_field_widget",
 *   label = @Translation("Widget Label"),
 *   field_types = {
 *     "string_field_type"
 *   }
 * )
 */
class StringFieldWidget extends WidgetBase {
   /**
    * {@inheritdoc}
    */
   public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
     $element['value'] = $element + [
       '#type' => 'textfield',
       '#default_value' => $items[$delta]->value,
     ];

     return $element;
   }
}
