<?php

namespace Drupal\preprocess;

use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * A base for the provider plugins.
 */
abstract class PreprocessBase implements PreprocessPluginInterface {
  use StringTranslationTrait;

  /**
   * Preprocess method for preprocess providers
   *
   * @param array $variables
   *   Variables that contain data to be processed.
   */
  public function process(array &$variables) {

  }

}