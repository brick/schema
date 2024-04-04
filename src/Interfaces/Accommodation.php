<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Boolean;

/**
 * schema:Accommodation
 *
 * @property-read SchemaTypeList<LocationFeatureSpecification> $amenityFeature           An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
 * @property-read SchemaTypeList<FloorPlan>                    $accommodationFloorPlan   A floorplan of some [[Accommodation]].
 * @property-read SchemaTypeList<Text|BedDetails|BedType>      $bed                      The type of bed or beds included in the accommodation. For the single case of just one bed of a certain type, you use bed directly with a text.
 * @property-read SchemaTypeList<QuantitativeValue>            $occupancy                The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person).
 * @property-read SchemaTypeList<URL>                          $tourBookingPage          A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as other kinds of tours as appropriate.
 * @property-read SchemaTypeList<Number|QuantitativeValue>     $numberOfBedrooms         The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
 * @property-read SchemaTypeList<Text>                         $accommodationCategory    Category of an [[Accommodation]], following real estate conventions, e.g. RESO (see [PropertySubType](https://ddwiki.reso.org/display/DDW17/PropertySubType+Field), and [PropertyType](https://ddwiki.reso.org/display/DDW17/PropertyType+Field) fields  for suggested values).
 * @property-read SchemaTypeList<Integer>                      $numberOfBathroomsTotal   The total integer number of bathrooms in some [[Accommodation]], following real estate conventions as [documented in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The simple sum of the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer will be 3.". See also [[numberOfRooms]].
 * @property-read SchemaTypeList<Number>                       $yearBuilt                The year an [[Accommodation]] was constructed. This corresponds to the [YearBuilt field in RESO](https://ddwiki.reso.org/display/DDW17/YearBuilt+Field). 
 * @property-read SchemaTypeList<Number|QuantitativeValue>     $numberOfRooms            The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
 * @property-read SchemaTypeList<QuantitativeValue>            $floorSize                The size of the accommodation, e.g. in square meter or squarefoot.
 * @property-read SchemaTypeList<Boolean|Text>                 $petsAllowed              Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
 * @property-read SchemaTypeList<Text>                         $floorLevel               The floor level for an [[Accommodation]] in a multi-storey building. Since counting
 * @property-read SchemaTypeList<Number>                       $numberOfPartialBathrooms Number of partial bathrooms - The total number of half and ¼ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsPartial field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field). 
 * @property-read SchemaTypeList<Text>                         $permittedUsage           Indications regarding the permitted usage of the accommodation.
 * @property-read SchemaTypeList<Number>                       $numberOfFullBathrooms    Number of full bathrooms - The total number of full and ¾ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsFull field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
 * @property-read SchemaTypeList<QuantitativeValue|Duration>   $leaseLength              Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
 */
interface Accommodation extends Place
{
}
