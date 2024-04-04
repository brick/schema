<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Time;
use Brick\Schema\DataType\DateTime;

/**
 * schema:InteractionCounter
 *
 * @property-read SchemaTypeList<WebSite|SoftwareApplication>              $interactionService   The WebSite or SoftwareApplication where the interactions took place.
 * @property-read SchemaTypeList<Action>                                   $interactionType      The Action representing the type of interaction. For up votes, +1s, etc. use [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use the most specific Action.
 * @property-read SchemaTypeList<PostalAddress|VirtualLocation|Text|Place> $location             The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
 * @property-read SchemaTypeList<Integer>                                  $userInteractionCount The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
 * @property-read SchemaTypeList<Time|DateTime>                            $startTime            The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
 * @property-read SchemaTypeList<Time|DateTime>                            $endTime              The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
 */
interface InteractionCounter extends StructuredValue
{
}
