<?php

namespace Drupal\preprocess\Preprocess;

use Drupal\preprocess\PreprocessBase;

/**
 * Class H1Tag used to check h1 tags on page.
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
