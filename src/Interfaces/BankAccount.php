<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:BankAccount
 *
 * @property-read SchemaTypeList<Text|URL>       $bankAccountType       The type of a bank account.
 * @property-read SchemaTypeList<MonetaryAmount> $accountOverdraftLimit An overdraft is an extension of credit from a lending institution when an account reaches zero. An overdraft allows the individual to continue withdrawing money even if the account has no funds in it. Basically the bank allows people to borrow a set amount of money.
 * @property-read SchemaTypeList<MonetaryAmount> $accountMinimumInflow  A minimum amount that has to be paid in every month.
 */
interface BankAccount extends FinancialProduct
{
}
