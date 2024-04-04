<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Time;

/**
 * schema:Schedule
 *
 * @property-read SchemaTypeList<Date|DateTime>  $endDate          The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
 * @property-read SchemaTypeList<Duration>       $duration         The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<Integer>        $byMonthWeek      Defines the week(s) of the month on which a recurring Event takes place. Specified as an Integer between 1-5. For clarity, byMonthWeek is best used in conjunction with byDay to indicate concepts like the first and third Mondays of a month.
 * @property-read SchemaTypeList<Duration|Text>  $repeatFrequency  Defines the frequency at which [[Event]]s will occur according to a schedule [[Schedule]]. The intervals between
 * @property-read SchemaTypeList<Integer>        $byMonth          Defines the month(s) of the year on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-12. January is 1.
 * @property-read SchemaTypeList<Integer>        $byMonthDay       Defines the day(s) of the month on which a recurring [[Event]] takes place. Specified as an [[Integer]] between 1-31.
 * @property-read SchemaTypeList<Time|DateTime>  $startTime        The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
 * @property-read SchemaTypeList<Date|DateTime>  $exceptDate       Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]] will not take place. The property allows exceptions to
 * @property-read SchemaTypeList<Integer>        $repeatCount      Defines the number of times a recurring [[Event]] will take place.
 * @property-read SchemaTypeList<Time|DateTime>  $endTime          The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file.\n\nNote that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
 * @property-read SchemaTypeList<Text>           $scheduleTimezone Indicates the timezone for which the time(s) indicated in the [[Schedule]] are given. The value provided should be among those listed in the IANA Time Zone Database.
 * @property-read SchemaTypeList<Date|DateTime>  $startDate        The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
 * @property-read SchemaTypeList<Text|DayOfWeek> $byDay            Defines the day(s) of the week on which a recurring [[Event]] takes place. May be specified using either [[DayOfWeek]], or alternatively [[Text]] conforming to iCal's syntax for byDay recurrence rules.
 */
interface Schedule extends Intangible
{
}
