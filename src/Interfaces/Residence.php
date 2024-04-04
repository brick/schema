<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Residence
 *
 * @property-read SchemaTypeList<FloorPlan> $accommodationFloorPlan A floorplan of some [[Accommodation]].
 */
interface Residence extends Place
{
}
