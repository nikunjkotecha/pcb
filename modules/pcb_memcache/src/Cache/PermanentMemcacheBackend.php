<?php

namespace Drupal\pcb_memcache\Cache;

use Drupal\memcache\MemcacheBackend;

/**
 * Defines a permanent memcache cache implementation.
 *
 * This cache implementation can be used for data like
 * stock which don't really need to be cleared during normal
 * cache rebuilds and need to be cleared . It uses the database to
 * store cached data. Each cache bin corresponds to a database
 * table by the same name.
 *
 * @ingroup cache
 */
class PermanentMemcacheBackend extends MemcacheBackend {

  /**
   * {@inheritdoc}
   */
  public function deleteAll() {
    // This cache doesn't need to be deleted when doing cache rebuild.
    // We do nothing here.
  }

  /**
   * Deletes all cache items in a bin when explicitly called.
   *
   * @see \Drupal\Core\Cache\DatabaseBackend::deleteAll()
   */
  public function deleteAllPermanent() {
    parent::deleteAll();
  }

}
