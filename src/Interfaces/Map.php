<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Map
 *
 * @property-read SchemaTypeList<MapCategoryType> $mapType Indicates the kind of Map, from the MapCategoryType Enumeration.
 */
interface Map extends CreativeWork
{
}
