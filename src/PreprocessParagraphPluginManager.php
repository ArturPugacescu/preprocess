<?php

namespace Drupal\preprocess;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\Plugin\Factory\ContainerFactory;
use Traversable;

/**
 * Provides a PreprocessParagraphPluginManager plugin manager.
 */
class PreprocessParagraphPluginManager extends DefaultPluginManager {

  /**
   * Constructs a PluginManager object.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */
  public function __construct(Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct(
      'Preprocess/Paragraph',
      $namespaces,
      $module_handler,
      'Drupal\preprocess\PreprocessPluginInterface',
      'Drupal\preprocess\Annotation\PreprocessAnnotation'
    );
    $this->alterInfo('preprocess_paragraph_info');
    $this->setCacheBackend($cache_backend, 'preprocess_paragraph_plugins');
    $this->factory = new ContainerFactory($this->getDiscovery());
  }
}

