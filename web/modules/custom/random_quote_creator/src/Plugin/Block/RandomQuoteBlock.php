<?php

namespace Drupal\random_quote_creator\Plugin\Block; //set the namespace to this module

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'random quote' Block.
 *
 * @Block(
 *   id = "random_quote_block",
 *   admin_label = @Translation("Random Quote Block"),
 *   category = @Translation("Utility Block"),
 * )
 */
class RandomQuoteBlock extends BlockBase { //your block name

    public function build() {
        $build = [
          '#theme' => 'random_quote_creator', //links to the function in the .module file
          '#color' => 'white',
          '#attached' => [
            'library' => [
              'random_quote_creator/random_quote_js_css', //links to the function in the .libraries.yml file
            ],
          ],
        ];
        return $build;
    }

}