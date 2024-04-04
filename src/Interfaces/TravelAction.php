<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:TravelAction
 *
 * @property-read SchemaTypeList<Distance> $distance The distance travelled, e.g. exercising or travelling.
 */
interface TravelAction extends MoveAction
{
}
