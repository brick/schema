<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;

/**
 * schema:InvestmentOrDeposit
 *
 * @property-read SchemaTypeList<MonetaryAmount|Number> $amount The amount of money.
 */
interface InvestmentOrDeposit extends FinancialProduct
{
}
