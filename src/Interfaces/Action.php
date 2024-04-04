<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Time;
use Brick\Schema\DataType\DateTime;

/**
 * schema:Action
 *
 * @property-read SchemaTypeList<ActionStatusType>                         $actionStatus Indicates the current disposition of the Action.
 * @property-read SchemaTypeList<Person|Organization>                      $agent        The direct performer or driver of the action (animate or inanimate). E.g. *John* wrote a book.
 * @property-read SchemaTypeList<Thing>                                    $result       The result produced in the action. E.g. John wrote *a book*.
 * @property-read SchemaTypeList<EntryPoint|URL>                           $target       Indicates a target EntryPoint, or url, for an Action.
 * @property-read SchemaTypeList<Thing>                                    $instrument   The object that helped the agent perform the action. E.g. John wrote a book with *a pen*.
 * @property-read SchemaTypeList<PostalAddress|VirtualLocation|Text|Place> $location     The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
 * @property-read SchemaTypeList<Thing>                                    $error        For failed actions, more information on the cause of the failure.
 * @property-read SchemaTypeList<Person|Organization>                      $participant  Other co-agents that participated in the action indirectly. E.g. John wrote a book with *Steve*.
 * @property-read SchemaTypeList<Time|DateTime>                            $startTime    The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
 * @property-read SchemaTypeList<Thing>                                    $object       The object upon which the action is carried out, whose state is kept intact or changed. Also known as the semantic roles patient, affected or undergoer (which change their state) or theme (which doesn't). E.g. John read *a book*.
 * @property-read SchemaTypeList<Time|DateTime>                            $endTime      The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
 * @property-read SchemaTypeList<Person|Organization>                      $provider     The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
 */
interface Action extends Thing
{
}
