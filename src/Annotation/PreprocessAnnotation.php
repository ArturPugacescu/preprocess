<?php

namespace Drupal\preprocess\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines an Preprocess annotation object.
 *
 * @see plugin_api
 * @see hook_archiver_info_alter()
 *
 * @Annotation
 */
class PreprocessAnnotation extends Plugin {

  /**
   * The Preprocess plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The bundle of entity.
   *
   * @var string
   */
  public $bundle;

  /**
   * The view mode of entity.
   *
   * @var string
   */
  public $view_mode;

  /**
   * The theme for which entity is processed.
   *
   * @var string
   */
  public $theme;

}
