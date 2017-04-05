<?php

namespace Drupal\clubstrapblocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Front Intro' Block.
 *
 * @Block(
 *   id = "frontintrocontent_block",
 *   admin_label = @Translation("Front Intro Content Block"),
 * )
 */
class FrontIntroContent extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t($this->printHtml()),
    );
  }

  public function printHtml() {
    $result = file_get_contents(drupal_get_path('module', 'clubstrapblocks') . '/templates/frontintrocontent.tpl.php');
    return $result;
  }

}
