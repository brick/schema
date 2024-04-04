<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Boolean;
use Brick\Schema\DataType\Text;

/**
 * schema:LoanOrCredit
 *
 * @property-read SchemaTypeList<MonetaryAmount|Number>  $amount             The amount of money.
 * @property-read SchemaTypeList<Boolean>                $recourseLoan       The only way you get the money back in the event of default is the security. Recourse is where you still have the opportunity to go back to the borrower for the rest of the money.
 * @property-read SchemaTypeList<Boolean>                $renegotiableLoan   Whether the terms for payment of interest can be renegotiated during the life of the loan.
 * @property-read SchemaTypeList<Text>                   $currency           The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
 * @property-read SchemaTypeList<RepaymentSpecification> $loanRepaymentForm  A form of paying back money previously borrowed from a lender. Repayment usually takes the form of periodic payments that normally include part principal plus interest in each payment.
 * @property-read SchemaTypeList<QuantitativeValue>      $loanTerm           The duration of the loan or credit agreement.
 * @property-read SchemaTypeList<Text|Thing>             $requiredCollateral Assets required to secure loan or credit repayments. It may take form of third party pledge, goods, financial instruments (cash, securities, etc.)
 * @property-read SchemaTypeList<Duration>               $gracePeriod        The period of time after any due date that the borrower has to fulfil its obligations before a default (failure to pay) is deemed to have occurred.
 * @property-read SchemaTypeList<URL|Text>               $loanType           The type of a loan or credit.
 */
interface LoanOrCredit extends FinancialProduct
{
}
