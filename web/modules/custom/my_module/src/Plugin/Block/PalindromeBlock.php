<?php

namespace Drupal\my_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'palindrome checker' Block.
 *
 * @Block(
 *   id = "palindrome_block",
 *   admin_label = @Translation("Palindrome Checker Block"),
 *   category = @Translation("Utility Block"),
 * )
 */
class PalindromeBlock extends BlockBase
{

  public function build()
  {
    $build = [
      '#theme' => 'palindrome_block',
      '#color' => 'white',
      '#attached' => [
        'library' => [
          'my_module/palindrome_checker',
          'my_module/base_styles',
        ],
      ],
    ];
    return $build;
  }
}
