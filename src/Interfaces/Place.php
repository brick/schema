<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Boolean;

/**
 * schema:Place
 *
 * @property-read SchemaTypeList<Place|GeospatialGeometry>     $geoTouches                       Represents spatial relations in which two geometries (or the places they represent) touch: "they have at least one boundary point in common, but no interior points." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
 * @property-read SchemaTypeList<GeoShape|GeoCoordinates>      $geo                              The geo coordinates of the place.
 * @property-read SchemaTypeList<Place>                        $containedInPlace                 The basic containment relation between a place and one that contains it.
 * @property-read SchemaTypeList<LocationFeatureSpecification> $amenityFeature                   An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
 * @property-read SchemaTypeList<Text>                         $slogan                           A slogan or motto associated with the item.
 * @property-read SchemaTypeList<Event>                        $event                            Upcoming or past event associated with this place, organization, or action.
 * @property-read SchemaTypeList<Review>                       $review                           A review of the item.
 * @property-read SchemaTypeList<Number|Text>                  $longitude                        The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
 * @property-read SchemaTypeList<Place|GeospatialGeometry>     $geoOverlaps                      Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
 * @property-read SchemaTypeList<GeospatialGeometry|Place>     $geoDisjoint                      Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: "they have no point in common. They form a set of disconnected geometries." (A symmetric relationship, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
 * @property-read SchemaTypeList<Integer>                      $maximumAttendeeCapacity          The total number of individuals that may attend an event or venue.
 * @property-read SchemaTypeList<URL>                          $maps                             A URL to a map of the place.
 * @property-read SchemaTypeList<Place|GeospatialGeometry>     $geoWithin                        Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
 * @property-read SchemaTypeList<PropertyValue>                $additionalProperty               A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
 * @property-read SchemaTypeList<Photograph|ImageObject>       $photos                           Photographs of this place.
 * @property-read SchemaTypeList<Boolean>                      $smokingAllowed                   Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
 * @property-read SchemaTypeList<URL|ImageObject>              $logo                             An associated logo.
 * @property-read SchemaTypeList<Boolean>                      $publicAccess                     A flag to signal that the [[Place]] is open to public visitors.  If this property is omitted there is no assumed default boolean value.
 * @property-read SchemaTypeList<Review>                       $reviews                          Review of the item.
 * @property-read SchemaTypeList<Text>                         $isicV4                           The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
 * @property-read SchemaTypeList<Text>                         $telephone                        The telephone number.
 * @property-read SchemaTypeList<GeospatialGeometry|Place>     $geoCrosses                       Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
 * @property-read SchemaTypeList<URL>                          $tourBookingPage                  A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as other kinds of tours as appropriate.
 * @property-read SchemaTypeList<Text>                         $branchCode                       A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.\n\nFor example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
 * @property-read SchemaTypeList<Text>                         $globalLocationNumber             The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
 * @property-read SchemaTypeList<Place|GeospatialGeometry>     $geoEquals                        Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship).
 * @property-read SchemaTypeList<Boolean>                      $hasDriveThroughService           Indicates whether some facility (e.g. [[FoodEstablishment]], [[CovidTestingFacility]]) offers a service that can be used by driving through in a car. In the case of [[CovidTestingFacility]] such facilities could potentially help with social distancing from other potentially-infected users.
 * @property-read SchemaTypeList<Text|Number>                  $latitude                         The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
 * @property-read SchemaTypeList<Text|URL|DefinedTerm>         $keywords                         Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
 * @property-read SchemaTypeList<GeospatialGeometry|Place>     $geoContains                      Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
 * @property-read SchemaTypeList<Map|URL>                      $hasMap                           A URL to a map of the place.
 * @property-read SchemaTypeList<Event>                        $events                           Upcoming or past events associated with this place or organization.
 * @property-read SchemaTypeList<OpeningHoursSpecification>    $specialOpeningHoursSpecification The special opening hours of a certain place.\n\nUse this to explicitly override general opening hours brought in scope by [[openingHoursSpecification]] or [[openingHours]].
 * @property-read SchemaTypeList<OpeningHoursSpecification>    $openingHoursSpecification        The opening hours of a certain place.
 * @property-read SchemaTypeList<Photograph|ImageObject>       $photo                            A photograph of this place.
 * @property-read SchemaTypeList<Boolean>                      $isAccessibleForFree              A flag to signal that the item, event, or place is accessible for free.
 * @property-read SchemaTypeList<GeospatialGeometry|Place>     $geoCovers                        Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
 * @property-read SchemaTypeList<AggregateRating>              $aggregateRating                  The overall rating, based on a collection of reviews or ratings, of the item.
 * @property-read SchemaTypeList<Place|GeospatialGeometry>     $geoCoveredBy                     Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
 * @property-read SchemaTypeList<URL>                          $map                              A URL to a map of the place.
 * @property-read SchemaTypeList<Place|GeospatialGeometry>     $geoIntersects                    Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
 * @property-read SchemaTypeList<Text|PostalAddress>           $address                          Physical address of the item.
 * @property-read SchemaTypeList<Text>                         $faxNumber                        The fax number.
 * @property-read SchemaTypeList<Place>                        $containedIn                      The basic containment relation between a place and one that contains it.
 * @property-read SchemaTypeList<Place>                        $containsPlace                    The basic containment relation between a place and another that it contains.
 * @property-read SchemaTypeList<Certification>                $hasCertification                 Certification information about a product, organization, service, place, or person.
 */
interface Place extends Thing
{
}
