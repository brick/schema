<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\DataType\Text;
use Brick\Schema\SchemaTypeList;

/**
 * http://schema.org/HowToSupply
 *
 * @property-read SchemaTypeList<Text|MonetaryAmount> $estimatedCost The estimated cost of the supply or supplies consumed when performing instructions.
 */
interface HowToSupply extends HowToItem
{
}
