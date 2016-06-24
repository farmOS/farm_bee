<?php
/**
 * @file
 * farm_bee.features.inc
 */

/**
 * Implements hook_views_api().
 */
function farm_bee_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_default_farm_asset_type().
 */
function farm_bee_default_farm_asset_type() {
  $items = array();
  $items['bee_colony'] = entity_import('farm_asset_type', '{
    "type" : "bee_colony",
    "label" : "Bee Colony",
    "weight" : 0,
    "rdf_mapping" : []
  }');
  return $items;
}
