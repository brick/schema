<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:PostalAddress
 *
 * @property-read SchemaTypeList<Text>         $postalCode          The postal code. For example, 94043.
 * @property-read SchemaTypeList<Text>         $postOfficeBoxNumber The post office box number for PO box addresses.
 * @property-read SchemaTypeList<Country|Text> $addressCountry      The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
 * @property-read SchemaTypeList<Text>         $streetAddress       The street address. For example, 1600 Amphitheatre Pkwy.
 * @property-read SchemaTypeList<Text>         $addressLocality     The locality in which the street address is, and which is in the region. For example, Mountain View.
 * @property-read SchemaTypeList<Text>         $addressRegion       The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
 */
interface PostalAddress extends ContactPoint
{
}
