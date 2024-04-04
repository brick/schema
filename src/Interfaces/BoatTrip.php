<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:BoatTrip
 *
 * @property-read SchemaTypeList<BoatTerminal> $departureBoatTerminal The terminal or port from which the boat departs.
 * @property-read SchemaTypeList<BoatTerminal> $arrivalBoatTerminal   The terminal or port from which the boat arrives.
 */
interface BoatTrip extends Trip
{
}
