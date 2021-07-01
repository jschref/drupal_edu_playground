<?php

namespace Drupal\my_module\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Caeser's Cipher' Block.
 *
 * @Block(
 *   id = "caesers_cipher",
 *   admin_label = @Translation("Caeser's Cipher Block"),
 *   category = @Translation("Utility Block"),
 * )
 */
class CaesersBlock extends BlockBase {

    // Instead of rendering this as raw markup, we want to use a template.
    public function build() {
        // TODO: add stuff here.
        $build = [
          '#theme' => 'caesers_cipher_block', //links back to my_module.module file 
          '#color' => 'white',
          '#attached' => [
            'library' => [
              'my_module/caesers_cipher',
              'my_module/base_styles', //links to mu_module.libraries.yml file
            ],
          ],
        ];
        return $build;
    }

}