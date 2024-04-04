<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:InsertAction
 *
 * @property-read SchemaTypeList<Place> $toLocation A sub property of location. The final location of the object or the agent after the action.
 */
interface InsertAction extends AddAction
{
}
