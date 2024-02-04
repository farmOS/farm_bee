<?php

/**
 * @file
 * Post update hooks for the farm_bee module.
 */

use Drupal\migrate_plus\Entity\Migration;

/**
 * Uninstall v1 migration config.
 */
function farm_bee_post_update_uninstall_v1_migration(&$sandbox) {
  $config = \Drupal::configFactory()->getEditable('migrate_plus.migration.farm_migrate_asset_bee_colony');
  if (!empty($config)) {
    $config->delete();
  }
}
