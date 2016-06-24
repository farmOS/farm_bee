<?php
/**
 * @file
 * farm_bee.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function farm_bee_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_farm_asset_bee_colony_pattern';
  $strongarm->value = 'farm/bees/[farm_asset:name]';
  $export['pathauto_farm_asset_bee_colony_pattern'] = $strongarm;

  return $export;
}
