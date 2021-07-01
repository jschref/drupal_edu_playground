<?php

namespace Drupal\my_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'current copyright date' Block.
 *
 * @Block(
 *   id = "copyright_block",
 *   admin_label = @Translation("Copyright Block"),
 *   category = @Translation("Utility Block"),
 * )
 */
class CopyrightBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('This Site Copyright') . '© ' . date("Y"),
    ];
  }

}

// echo "&copy;" . date("Y")

