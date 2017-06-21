<?php

namespace Drupal\preprocess;

/**
 * Providers an interface for Preprocess providers.
 */

interface PreprocessPluginInterface {

  /**
   * Process function.
   *
   * @param array $variables
   *   Variables that contain data to be processed.
   */
  public function process(array &$variables);

}

