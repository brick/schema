<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\DataType\DateTime;
use Brick\Schema\SchemaTypeList;

/**
 * http://schema.org/PlanAction
 *
 * @property-read SchemaTypeList<DateTime> $scheduledTime The time the object is scheduled to.
 */
interface PlanAction extends OrganizeAction
{
}
