<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;

/**
 * schema:MoneyTransfer
 *
 * @property-read SchemaTypeList<MonetaryAmount|Number>  $amount          The amount of money.
 * @property-read SchemaTypeList<BankOrCreditUnion|Text> $beneficiaryBank A bank or bank’s branch, financial institution or international financial institution operating the beneficiary’s bank account or releasing funds for the beneficiary.
 */
interface MoneyTransfer extends TransferAction
{
}
