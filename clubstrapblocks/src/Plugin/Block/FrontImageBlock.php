<?php

namespace Drupal\clubstrapblocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Front Image' Block.
 *
 * @Block(
 *   id = "frontimage_block",
 *   admin_label = @Translation("Front Image Block"),
 * )
 */
class FrontImageBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t($this->printHtml()),
    );
  }

  public function printHtml() {
    $imagePath = drupal_get_path('module', 'clubstrapblocks') . '/assets/images/front-banner.png';
    $result = '<div class="row">';
    $result .= '<img alt="Computer Science Club" class="img-responsive" src="' . $imagePath . '" style="width:100%;height:auto;" />';
    $result .= '</div>';
    return $result;
  }
}
