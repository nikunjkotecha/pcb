<?php

/**
 * @file
 * Provides drush commands for pcb.
 *
 * @TODO: Test the drush command properly.
 */

/**
 * Implements hook_drush_command().
 */
function pcb_drush_command() {
  $commands = [];

  $commands['permanent-cache-bin-flush'] = [
    'description' => 'Flush permanent cache bin.',
    'aliases'     => ['pcbf'],
    'arguments'     => [
      'bin' => 'Bin to flush cache of.',
    ],
    'examples'    => [
      'drush pcbf stock' => 'Flush stock bin cache.',
    ],
  ];

  return ($commands);
}

/**
 * Implements drush permanent cache bin flush command.
 */
function drush_permanent_cache_bin_flush($bin) {
  \Drupal::service('cache.' . $bin)->deleteAllPermanent();
  drush_print(dt('Deleted all cache for @bin.', ['@bin' => $bin]));
}
