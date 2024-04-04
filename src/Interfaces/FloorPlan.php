<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Boolean;
use Brick\Schema\DataType\Text;

/**
 * schema:FloorPlan
 *
 * @property-read SchemaTypeList<LocationFeatureSpecification> $amenityFeature                      An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
 * @property-read SchemaTypeList<QuantitativeValue>            $numberOfAccommodationUnits          Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
 * @property-read SchemaTypeList<Number|QuantitativeValue>     $numberOfBedrooms                    The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
 * @property-read SchemaTypeList<Integer>                      $numberOfBathroomsTotal              The total integer number of bathrooms in some [[Accommodation]], following real estate conventions as [documented in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The simple sum of the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer will be 3.". See also [[numberOfRooms]].
 * @property-read SchemaTypeList<QuantitativeValue>            $numberOfAvailableAccommodationUnits Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
 * @property-read SchemaTypeList<Number|QuantitativeValue>     $numberOfRooms                       The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
 * @property-read SchemaTypeList<QuantitativeValue>            $floorSize                           The size of the accommodation, e.g. in square meter or squarefoot.
 * @property-read SchemaTypeList<Boolean|Text>                 $petsAllowed                         Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
 * @property-read SchemaTypeList<Number>                       $numberOfPartialBathrooms            Number of partial bathrooms - The total number of half and ¼ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsPartial field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field). 
 * @property-read SchemaTypeList<Accommodation>                $isPlanForApartment                  Indicates some accommodation that this floor plan describes.
 * @property-read SchemaTypeList<ImageObject|URL>              $layoutImage                         A schematic image showing the floorplan layout.
 * @property-read SchemaTypeList<Number>                       $numberOfFullBathrooms               Number of full bathrooms - The total number of full and ¾ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsFull field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
 */
interface FloorPlan extends Intangible
{
}
