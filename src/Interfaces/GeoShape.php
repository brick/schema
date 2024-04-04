<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:GeoShape
 *
 * @property-read SchemaTypeList<Text>               $postalCode     The postal code. For example, 94043.
 * @property-read SchemaTypeList<Text>               $circle         A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
 * @property-read SchemaTypeList<Country|Text>       $addressCountry The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
 * @property-read SchemaTypeList<Text|Number>        $elevation      The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
 * @property-read SchemaTypeList<Text>               $polygon        A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
 * @property-read SchemaTypeList<Text|PostalAddress> $address        Physical address of the item.
 * @property-read SchemaTypeList<Text>               $line           A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
 * @property-read SchemaTypeList<Text>               $box            A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the second point is the upper corner. A box is expressed as two points separated by a space character.
 */
interface GeoShape extends StructuredValue
{
}
