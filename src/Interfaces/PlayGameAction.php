<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:PlayGameAction
 *
 * @property-read SchemaTypeList<GameAvailabilityEnumeration|Text> $gameAvailabilityType Indicates the availability type of the game content associated with this action, such as whether it is a full version or a demo.
 */
interface PlayGameAction extends ConsumeAction
{
}
