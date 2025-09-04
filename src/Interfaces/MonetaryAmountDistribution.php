<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\DataType\Text;
use Brick\Schema\SchemaTypeList;

/**
 * http://schema.org/MonetaryAmountDistribution
 *
 * @property-read SchemaTypeList<Text> $currency The currency in which the monetary amount is expressed.
 */
interface MonetaryAmountDistribution extends QuantitativeValueDistribution
{
}
