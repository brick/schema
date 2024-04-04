<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:StatisticalPopulation
 *
 * @property-read SchemaTypeList<Class> $populationType Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
 */
interface StatisticalPopulation extends Intangible
{
}
