<?php

namespace Drupal\starwars_api\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Death Star Target Selector' Block.
 *
 * @Block(
 *   id = "starwars_api",
 *   admin_label = @Translation("Death Star Target Selector Block"),
 *   category = @Translation("Utility Block"),
 * )
 */
class StarWarsApi extends BlockBase //this has to match the file name
{

  // Instead of rendering this as raw markup, we want to use a template.
  public function build()
  {
    // TODO: add stuff here.
    $build = [
      '#theme' => 'star_wars_api', //links back to .module file 
      '#color' => 'white',
      '#attached' => [
        'library' => [
          'starwars_api/sw_api_library', //links to .libraries.yml file
        ],
      ],
    ];
    return $build;
  }
}
