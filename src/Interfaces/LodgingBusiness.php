<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Time;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Boolean;

/**
 * schema:LodgingBusiness
 *
 * @property-read SchemaTypeList<LocationFeatureSpecification> $amenityFeature    An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
 * @property-read SchemaTypeList<DateTime|Time>                $checkoutTime      The latest someone may check out of a lodging establishment.
 * @property-read SchemaTypeList<Language|Text>                $availableLanguage A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
 * @property-read SchemaTypeList<Audience>                     $audience          An intended audience, i.e. a group for whom something was created.
 * @property-read SchemaTypeList<Number|QuantitativeValue>     $numberOfRooms     The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
 * @property-read SchemaTypeList<Time|DateTime>                $checkinTime       The earliest someone may check into a lodging establishment.
 * @property-read SchemaTypeList<Boolean|Text>                 $petsAllowed       Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
 * @property-read SchemaTypeList<Rating>                       $starRating        An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
 */
interface LodgingBusiness extends LocalBusiness
{
}
