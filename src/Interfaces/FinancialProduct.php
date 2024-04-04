<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;

/**
 * schema:FinancialProduct
 *
 * @property-read SchemaTypeList<Number|QuantitativeValue> $interestRate                    The interest rate, charged or paid, applicable to the financial product. Note: This is different from the calculated annualPercentageRate.
 * @property-read SchemaTypeList<Number|QuantitativeValue> $annualPercentageRate            The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage number that represents the actual yearly cost of funds over the term of a loan. This includes any fees or additional costs associated with the transaction.
 * @property-read SchemaTypeList<URL|Text>                 $feesAndCommissionsSpecification Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
 */
interface FinancialProduct extends Service
{
}
