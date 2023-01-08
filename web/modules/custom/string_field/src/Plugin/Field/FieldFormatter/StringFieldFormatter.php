<?php

namespace Drupal\string_field\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Url;

/**
 * Plugin implementation of the 'string_field' formatter.
 *
 * @FieldFormatter(
 *   id = "string_field_formatter",
 *   label = @Translation("State Field"),
 *   field_types = {
 *     "string_field_type"
 *   }
 * )
 */
class StringFieldFormatter extends FormatterBase {

   /**
     * {@inheritdoc}
     */
    public function viewElements(FieldItemListInterface $items, $langcode) {
      foreach ($items as $delta => $item) {
        // Render each element as markup.
       // $element[$delta] = ['#markup' => $item->rowId .':' . $item->columnId .':'.$item->Option ];
      }

      return $element;
    }

}
