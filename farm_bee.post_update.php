<?php

/**
 * @file
 * Post update hooks for the farm_bee module.
 */

/**
 * Implements hook_removed_post_updates().
 */
function farm_bee_removed_post_updates() {
  return [
    'farm_bee_post_update_uninstall_v1_migration' => '3.x',
  ];
}
