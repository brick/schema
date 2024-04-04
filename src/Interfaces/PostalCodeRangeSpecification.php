<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:PostalCodeRangeSpecification
 *
 * @property-read SchemaTypeList<Text> $postalCodeEnd   Last postal code in the range (included). Needs to be after [[postalCodeBegin]].
 * @property-read SchemaTypeList<Text> $postalCodeBegin First postal code in a range (included).
 */
interface PostalCodeRangeSpecification extends StructuredValue
{
}
