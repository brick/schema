<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\DateTime;

/**
 * schema:TaxiReservation
 *
 * @property-read SchemaTypeList<DateTime>                  $pickupTime     When a taxi will pick up a passenger or a rental car can be picked up.
 * @property-read SchemaTypeList<Place>                     $pickupLocation Where a taxi will pick up a passenger or a rental car can be picked up.
 * @property-read SchemaTypeList<QuantitativeValue|Integer> $partySize      Number of people the reservation should accommodate.
 */
interface TaxiReservation extends Reservation
{
}
