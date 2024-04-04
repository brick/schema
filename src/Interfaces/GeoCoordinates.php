<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:GeoCoordinates
 *
 * @property-read SchemaTypeList<Text>               $postalCode     The postal code. For example, 94043.
 * @property-read SchemaTypeList<Number|Text>        $longitude      The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
 * @property-read SchemaTypeList<Country|Text>       $addressCountry The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
 * @property-read SchemaTypeList<Text|Number>        $elevation      The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
 * @property-read SchemaTypeList<Text|Number>        $latitude       The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
 * @property-read SchemaTypeList<Text|PostalAddress> $address        Physical address of the item.
 */
interface GeoCoordinates extends StructuredValue
{
}
