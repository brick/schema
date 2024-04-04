<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Boolean;
use Brick\Schema\DataType\Text;

/**
 * schema:ApartmentComplex
 *
 * @property-read SchemaTypeList<QuantitativeValue>        $numberOfAccommodationUnits          Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
 * @property-read SchemaTypeList<URL>                      $tourBookingPage                     A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as other kinds of tours as appropriate.
 * @property-read SchemaTypeList<Number|QuantitativeValue> $numberOfBedrooms                    The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
 * @property-read SchemaTypeList<QuantitativeValue>        $numberOfAvailableAccommodationUnits Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
 * @property-read SchemaTypeList<Boolean|Text>             $petsAllowed                         Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
 */
interface ApartmentComplex extends Residence
{
}
