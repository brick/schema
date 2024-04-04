<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:DefinedRegion
 *
 * @property-read SchemaTypeList<Text>                         $postalCode       The postal code. For example, 94043.
 * @property-read SchemaTypeList<Country|Text>                 $addressCountry   The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
 * @property-read SchemaTypeList<Text>                         $postalCodePrefix A defined range of postal codes indicated by a common textual prefix. Used for non-numeric systems such as UK.
 * @property-read SchemaTypeList<Text>                         $addressRegion    The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
 * @property-read SchemaTypeList<PostalCodeRangeSpecification> $postalCodeRange  A defined range of postal codes.
 */
interface DefinedRegion extends StructuredValue
{
}
