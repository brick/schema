<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Boolean;
use Brick\Schema\DataType\Number;

/**
 * schema:PaymentCard
 *
 * @property-read SchemaTypeList<Boolean>               $contactlessPayment            A secure method for consumers to purchase products or services via debit, credit or smartcards by using RFID or NFC technology.
 * @property-read SchemaTypeList<MonetaryAmount|Number> $monthlyMinimumRepaymentAmount The minimum payment is the lowest amount of money that one is required to pay on a credit card statement each month.
 * @property-read SchemaTypeList<MonetaryAmount>        $floorLimit                    A floor limit is the amount of money above which credit card transactions must be authorized.
 * @property-read SchemaTypeList<Number|Boolean>        $cashBack                      A cardholder benefit that pays the cardholder a small percentage of their net expenditures.
 */
interface PaymentCard extends FinancialProduct, PaymentMethod
{
}
