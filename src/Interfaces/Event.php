<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Boolean;
use Brick\Schema\DataType\Time;

/**
 * schema:Event
 *
 * @property-read SchemaTypeList<Date|DateTime>                            $endDate                         The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
 * @property-read SchemaTypeList<CreativeWork>                             $workFeatured                    A work featured in some event, e.g. exhibited in an ExhibitionEvent.
 * @property-read SchemaTypeList<Review>                                   $review                          A review of the item.
 * @property-read SchemaTypeList<Person|Organization>                      $performer                       A performer at the event—for example, a presenter, musician, musical group or actor.
 * @property-read SchemaTypeList<Duration>                                 $duration                        The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<Integer>                                  $maximumPhysicalAttendeeCapacity The maximum physical attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OfflineEventAttendanceMode]] (or the offline aspects, in the case of a [[MixedEventAttendanceMode]]). 
 * @property-read SchemaTypeList<Integer>                                  $maximumAttendeeCapacity         The total number of individuals that may attend an event or venue.
 * @property-read SchemaTypeList<EventStatusType>                          $eventStatus                     An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
 * @property-read SchemaTypeList<Event>                                    $subEvents                       Events that are a part of this event. For example, a conference event includes many presentations, each subEvents of the conference.
 * @property-read SchemaTypeList<Organization|Person>                      $contributor                     A secondary contributor to the CreativeWork or Event.
 * @property-read SchemaTypeList<Person>                                   $director                        A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Integer>                                  $maximumVirtualAttendeeCapacity  The maximum virtual attendee capacity of an [[Event]] whose [[eventAttendanceMode]] is [[OnlineEventAttendanceMode]] (or the online aspects, in the case of a [[MixedEventAttendanceMode]]). 
 * @property-read SchemaTypeList<Person|Organization>                      $composer                        The person or organization who wrote a composition, or who is the composer of a work performed at some event.
 * @property-read SchemaTypeList<PostalAddress|VirtualLocation|Text|Place> $location                        The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
 * @property-read SchemaTypeList<CreativeWork>                             $workPerformed                   A work performed in some event, for example a play performed in a TheaterEvent.
 * @property-read SchemaTypeList<Grant>                                    $funding                         A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
 * @property-read SchemaTypeList<EventAttendanceModeEnumeration>           $eventAttendanceMode             The eventAttendanceMode of an event indicates whether it occurs online, offline, or a mix.
 * @property-read SchemaTypeList<Event>                                    $superEvent                      An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent.
 * @property-read SchemaTypeList<Person|Organization>                      $performers                      The main performer or performers of the event—for example, a presenter, musician, or actor.
 * @property-read SchemaTypeList<Person|Organization>                      $attendees                       A person attending the event.
 * @property-read SchemaTypeList<Demand|Offer>                             $offers                          An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
 * @property-read SchemaTypeList<Thing>                                    $about                           The subject matter of the content.
 * @property-read SchemaTypeList<Audience>                                 $audience                        An intended audience, i.e. a group for whom something was created.
 * @property-read SchemaTypeList<Text|URL|DefinedTerm>                     $keywords                        Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
 * @property-read SchemaTypeList<Organization|Person>                      $sponsor                         A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
 * @property-read SchemaTypeList<CreativeWork>                             $recordedIn                      The CreativeWork that captured all or part of this Event.
 * @property-read SchemaTypeList<Person|Organization>                      $attendee                        A person or organization attending the event.
 * @property-read SchemaTypeList<Integer>                                  $remainingAttendeeCapacity       The number of attendee places for an event that remain unallocated.
 * @property-read SchemaTypeList<Boolean>                                  $isAccessibleForFree             A flag to signal that the item, event, or place is accessible for free.
 * @property-read SchemaTypeList<Text>                                     $typicalAgeRange                 The typical expected age range, e.g. '7-9', '11-'.
 * @property-read SchemaTypeList<Organization|Person>                      $funder                          A person or organization that supports (sponsors) something through some kind of financial contribution.
 * @property-read SchemaTypeList<AggregateRating>                          $aggregateRating                 The overall rating, based on a collection of reviews or ratings, of the item.
 * @property-read SchemaTypeList<Date>                                     $previousStartDate               Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.
 * @property-read SchemaTypeList<Schedule>                                 $eventSchedule                   Associates an [[Event]] with a [[Schedule]]. There are circumstances where it is preferable to share a schedule for a series of
 * @property-read SchemaTypeList<Organization|Person>                      $organizer                       An organizer of an Event.
 * @property-read SchemaTypeList<Event>                                    $subEvent                        An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference.
 * @property-read SchemaTypeList<Text|Language>                            $inLanguage                      The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
 * @property-read SchemaTypeList<Date|DateTime>                            $startDate                       The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
 * @property-read SchemaTypeList<Time|DateTime>                            $doorTime                        The time admission will commence.
 * @property-read SchemaTypeList<Person>                                   $actor                           An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Person|Organization>                      $translator                      Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.
 */
interface Event extends Thing
{
}
