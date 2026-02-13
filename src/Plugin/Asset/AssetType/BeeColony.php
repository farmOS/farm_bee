<?php

namespace Drupal\farm_bee\Plugin\Asset\AssetType;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\farm_entity\Attribute\AssetType;
use Drupal\farm_entity\Plugin\Asset\AssetType\FarmAssetType;

/**
 * Provides the bee colony asset type.
 */
#[AssetType(
  id: 'bee_colony',
  label: new TranslatableMarkup('Bee colony'),
)]
class BeeColony extends FarmAssetType {

}
