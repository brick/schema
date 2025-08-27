<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:GeoCircle
 *
 * @property-read SchemaTypeList<Distance|Text|Number> $geoRadius   Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
 * @property-read SchemaTypeList<GeoCoordinates>       $geoMidpoint Indicates the GeoCoordinates at the centre of a GeoShape, e.g. GeoCircle.
 */
interface GeoCircle extends GeoShape
{
}
