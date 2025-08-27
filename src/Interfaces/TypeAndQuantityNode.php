<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;

/**
 * schema:TypeAndQuantityNode
 *
 * @property-read SchemaTypeList<Product|Service>  $typeOfGood       The product that this structured value is referring to.
 * @property-read SchemaTypeList<Number>           $amountOfThisGood The quantity of the goods included in the offer.
 * @property-read SchemaTypeList<Text>             $unitText         A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
 * @property-read SchemaTypeList<Text|URL>         $unitCode         The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
 * @property-read SchemaTypeList<BusinessFunction> $businessFunction The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
 */
interface TypeAndQuantityNode extends StructuredValue
{
}
