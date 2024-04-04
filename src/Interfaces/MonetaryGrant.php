<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;

/**
 * schema:MonetaryGrant
 *
 * @property-read SchemaTypeList<MonetaryAmount|Number> $amount The amount of money.
 * @property-read SchemaTypeList<Organization|Person>   $funder A person or organization that supports (sponsors) something through some kind of financial contribution.
 */
interface MonetaryGrant extends Grant
{
}
