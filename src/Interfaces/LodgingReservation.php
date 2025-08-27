<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Time;

/**
 * schema:LodgingReservation
 *
 * @property-read SchemaTypeList<Text>                      $lodgingUnitDescription A full description of the lodging unit.
 * @property-read SchemaTypeList<DateTime|Time>             $checkoutTime           The latest someone may check out of a lodging establishment.
 * @property-read SchemaTypeList<QuantitativeValue|Integer> $numAdults              The number of adults staying in the unit.
 * @property-read SchemaTypeList<Integer|QuantitativeValue> $numChildren            The number of children staying in the unit.
 * @property-read SchemaTypeList<Time|DateTime>             $checkinTime            The earliest someone may check into a lodging establishment.
 * @property-read SchemaTypeList<QualitativeValue|Text>     $lodgingUnitType        Textual description of the unit type (including suite vs. room, size of bed, etc.).
 */
interface LodgingReservation extends Reservation
{
}
