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
class PalindromeBlock extends BlockBase {

    // Instead of rendering this as raw markup, we want to use a template.
    public function build() {
        // TODO: add stuff here.
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