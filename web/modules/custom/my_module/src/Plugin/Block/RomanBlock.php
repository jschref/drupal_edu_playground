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
class RomanBlock extends BlockBase
{

  public function build()
  {
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
