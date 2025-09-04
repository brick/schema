<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\DataType\Number;
use Brick\Schema\SchemaTypeList;

/**
 * http://schema.org/InvestmentOrDeposit
 *
 * @property-read SchemaTypeList<Number|MonetaryAmount> $amount The amount of money.
 */
interface InvestmentOrDeposit extends FinancialProduct
{
}
