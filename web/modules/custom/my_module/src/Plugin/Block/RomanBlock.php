<?php

namespace Drupal\my_module\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Roman Numeral Generator' Block.
 *
 * @Block(
 *   id = "roman_numeral_generator",
 *   admin_label = @Translation("Roman Numeral Generator Block"),
 *   category = @Translation("Utility Block"),
 * )
 */
class RomanBlock extends BlockBase {

    // Instead of rendering this as raw markup, we want to use a template.
    public function build() {
        // TODO: add stuff here.
        $build = [
          '#theme' => 'roman_numeral_generator_block',
          '#color' => 'white',
          '#attached' => [
            'library' => [
              'my_module/roman_numeral_generator',
              'my_module/base_styles',
            ],
          ],
        ];
        return $build;
    }

}