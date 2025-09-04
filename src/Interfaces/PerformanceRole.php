<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\DataType\Text;
use Brick\Schema\SchemaTypeList;

/**
 * http://schema.org/PerformanceRole
 *
 * @property-read SchemaTypeList<Text> $characterName The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
 */
interface PerformanceRole extends Role
{
}
