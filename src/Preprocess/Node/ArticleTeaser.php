<?php

namespace Drupal\preprocess\Preprocess\Node;

use Drupal\preprocess\PreprocessBase;

/**
 * Class ArticleTeaser used for preprocessing article nodes with teaser view mode.
 *
 * @PreprocessAnnotation(
 *   id = "article_teaser",
 *   bundle = "article",
 *   view_mode = "teaser",
 *   theme = "bartik",
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
