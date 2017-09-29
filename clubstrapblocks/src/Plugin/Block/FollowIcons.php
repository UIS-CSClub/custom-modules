<?php

namespace Drupal\clubstrapblocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Follow icons' Block.
 *
 * @Block(
 *   id = "followicons_block",
 *   admin_label = @Translation("Follow Icons Block"),
 * )
 */
class FollowIcons extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t($this->printHtml()),
    );
  }

  public function printHtml() {

    $result = '<h3>Join Us On</h3>';
    $result .= '<a href="https://www.facebook.com/csclub.uis/" target="_blank"><span class="fa-stack fa-lg icon-facebook">‌<span class="fa fa-square fa-stack-2x">‌</span> <span class="fa fa-facebook fa-stack-1x">‌</span></span></a>';
    $result .= '<span class="fa-stack fa-lg icon-twitter">‌ <span class="fa fa-square fa-stack-2x">‌</span> <span class="fa fa-twitter fa-stack-1x">‌</span> </span>';
    $result .= '<span class="fa-stack fa-lg icon-youtube">‌ <span class="fa fa-square fa-stack-2x">‌</span> <span class="fa fa-youtube fa-stack-1x">‌</span> </span>';
    $result .= '<a href="https://github.com/UIS-CSClub" target="_blank"><span class="fa-stack fa-lg icon-github">‌ <span class="fa fa-square fa-stack-2x">‌‌</span> <span class="fa fa-github fa-stack-1x">‌‌</span> </span></a>';
    $result .= '<a href="/rss.xml" target="_blank"><span class="fa-stack fa-lg icon-rss">‌ <span class="fa fa-square fa-stack-2x">‌‌‌</span> <span class="fa fa-rss fa-stack-1x">‌‌‌</span> </span></a>';
    return $result;
  }

}
