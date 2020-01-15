<?php
namespace Drupal\adminconfigform\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Timezone' Block.
 *
 * @Block(
 *   id = "timezone_block",
 *   admin_label = @Translation("Timezone block"),
 *   category = @Translation("Timezone"),
 * )
 */
class TimezoneBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
    	'#theme' => 'adminconfigform',
      '#title' => $this->t('Hello, World!'),
      '#description' => 'Websolutions Agency is the industry leading Drupal development agency in Croatia'
    ];
  }
}