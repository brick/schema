<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;

/**
 * schema:RepaymentSpecification
 *
 * @property-read SchemaTypeList<MonetaryAmount>        $earlyPrepaymentPenalty The amount to be paid as a penalty in the event of early payment of the loan.
 * @property-read SchemaTypeList<MonetaryAmount|Number> $downPayment            a type of payment made in cash during the onset of the purchase of an expensive good/service. The payment typically represents only a percentage of the full purchase price.
 * @property-read SchemaTypeList<MonetaryAmount>        $loanPaymentAmount      The amount of money to pay in a single payment.
 * @property-read SchemaTypeList<Number>                $numberOfLoanPayments   The number of payments contractually required at origination to repay the loan. For monthly paying loans this is the number of months from the contractual first payment date to the maturity date.
 * @property-read SchemaTypeList<Number>                $loanPaymentFrequency   Frequency of payments due, i.e. number of months between payments. This is defined as a frequency, i.e. the reciprocal of a period of time.
 */
interface RepaymentSpecification extends StructuredValue
{
}
