<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Boolean;

/**
 * schema:MortgageLoan
 *
 * @property-read SchemaTypeList<MonetaryAmount> $loanMortgageMandateAmount Amount of mortgage mandate that can be converted into a proper mortgage at a later stage.
 * @property-read SchemaTypeList<Boolean>        $domiciledMortgage         Whether borrower is a resident of the jurisdiction where the property is located.
 */
interface MortgageLoan extends LoanOrCredit
{
}
