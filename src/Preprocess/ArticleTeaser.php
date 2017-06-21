<?php

namespace Drupal\preprocess\Preprocess;

use Drupal\preprocess\PreprocessBase;

/**
 * Class ArticleTeaser used for preprocessing article nodes with teaser view mode.
 *
 * @PreprocessAnnotation(
 *   id = "node_article_teaser",
 *   entity_type = "node",
 *   machine_name = "article",
 *   view_mode = "teaser",
 * )
 */
class ArticleTeaser extends PreprocessBase {

  /**
   * {@inheritdoc}
   */
  public function process(array &$variables) {
    // Whatever preprocess stuff is needed should go here.
  }

}
