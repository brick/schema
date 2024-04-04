<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Time;

/**
 * schema:Trip
 *
 * @property-read SchemaTypeList<Place>               $tripOrigin    The location of origin of the trip, prior to any destination(s).
 * @property-read SchemaTypeList<DateTime|Time>       $arrivalTime   The expected arrival time.
 * @property-read SchemaTypeList<Place|ItemList>      $itinerary     Destination(s) ( [[Place]] ) that make up a trip. For a trip where destination order is important use [[ItemList]] to specify that order (see examples).
 * @property-read SchemaTypeList<Trip>                $partOfTrip    Identifies that this [[Trip]] is a subTrip of another Trip.  For example Day 1, Day 2, etc. of a multi-day trip.
 * @property-read SchemaTypeList<Demand|Offer>        $offers        An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
 * @property-read SchemaTypeList<DateTime|Time>       $departureTime The expected departure time.
 * @property-read SchemaTypeList<Trip>                $subTrip       Identifies a [[Trip]] that is a subTrip of this Trip.  For example Day 1, Day 2, etc. of a multi-day trip.
 * @property-read SchemaTypeList<Person|Organization> $provider      The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
 */
interface Trip extends Intangible
{
}
