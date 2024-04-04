<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Time;
use Brick\Schema\DataType\DateTime;

/**
 * schema:FoodEstablishmentReservation
 *
 * @property-read SchemaTypeList<Time|DateTime>             $startTime The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
 * @property-read SchemaTypeList<Time|DateTime>             $endTime   The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
 * @property-read SchemaTypeList<QuantitativeValue|Integer> $partySize Number of people the reservation should accommodate.
 */
interface FoodEstablishmentReservation extends Reservation
{
}
