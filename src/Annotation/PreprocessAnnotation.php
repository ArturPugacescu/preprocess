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
   * The type of entity to be processed.
   *
   * @var string
   */
  public $entity_type;

  /**
   * The machine name of entity.
   *
   * @var string
   */
  public $machine_name;

  /**
   * The view mode of entity.
   *
   * @var string
   */
  public $view_mode;

}
