<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:BorrowAction
 *
 * @property-read SchemaTypeList<Person|Organization> $lender A sub property of participant. The person that lends the object being borrowed.
 */
interface BorrowAction extends TransferAction
{
}
