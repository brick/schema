<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:BusTrip
 *
 * @property-read SchemaTypeList<Text>               $busName          The name of the bus (e.g. Bolt Express).
 * @property-read SchemaTypeList<BusStation|BusStop> $departureBusStop The stop or station from which the bus departs.
 * @property-read SchemaTypeList<Text>               $busNumber        The unique identifier for the bus.
 * @property-read SchemaTypeList<BusStation|BusStop> $arrivalBusStop   The stop or station from which the bus arrives.
 */
interface BusTrip extends Trip
{
}
