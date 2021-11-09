<?php

namespace Drupal\ld_template\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for ld_template routes.
 */
class LdTemplateController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
