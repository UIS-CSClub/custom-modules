<?php

namespace Drupal\clubstrapblocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Footer Copyright' Block.
 *
 * @Block(
 *   id = "footercopyright_block",
 *   admin_label = @Translation("Footer Copyright Block"),
 * )
 */
class FooterCopyright extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t($this->printHtml()),
    );
  }

  public function printHtml() {
    $result = '&copy; Copyright 2017, <a href="http://csclub.uis.edu">Computer Science Club</a><br />';
    $result .= '<span><a href="https://uis.edu">University of Illinois at Springfield</a></span>';
    return $result;
  }

}
