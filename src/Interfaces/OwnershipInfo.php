<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\DateTime;

/**
 * schema:OwnershipInfo
 *
 * @property-read SchemaTypeList<DateTime>            $ownedThrough The date and time of giving up ownership on the product.
 * @property-read SchemaTypeList<DateTime>            $ownedFrom    The date and time of obtaining the product.
 * @property-read SchemaTypeList<Person|Organization> $acquiredFrom The organization or person from which the product was acquired.
 * @property-read SchemaTypeList<Product|Service>     $typeOfGood   The product that this structured value is referring to.
 */
interface OwnershipInfo extends StructuredValue
{
}
