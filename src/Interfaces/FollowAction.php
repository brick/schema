<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:FollowAction
 *
 * @property-read SchemaTypeList<Person|Organization> $followee A sub property of object. The person or organization being followed.
 */
interface FollowAction extends InteractAction
{
}
