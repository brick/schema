<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Date;

/**
 * schema:PlanAction
 *
 * @property-read SchemaTypeList<DateTime|Date> $scheduledTime The time the object is scheduled to.
 */
interface PlanAction extends OrganizeAction
{
}
