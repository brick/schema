<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;

/**
 * schema:BedDetails
 *
 * @property-read SchemaTypeList<Number>       $numberOfBeds The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
 * @property-read SchemaTypeList<Text|BedType> $typeOfBed    The type of bed to which the BedDetail refers, i.e. the type of bed available in the quantity indicated by quantity.
 */
interface BedDetails extends Intangible
{
}
