<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:HowToSupply
 *
 * @property-read SchemaTypeList<MonetaryAmount|Text> $estimatedCost The estimated cost of the supply or supplies consumed when performing instructions.
 */
interface HowToSupply extends HowToItem
{
}
