<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Boolean;
use Brick\Schema\DataType\Text;

/**
 * schema:BroadcastEvent
 *
 * @property-read SchemaTypeList<Boolean>       $isLiveBroadcast  True if the broadcast is of a live event.
 * @property-read SchemaTypeList<Event>         $broadcastOfEvent The event being broadcast such as a sporting event or awards ceremony.
 * @property-read SchemaTypeList<Text|Language> $subtitleLanguage Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
 * @property-read SchemaTypeList<Text>          $videoFormat      The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
 */
interface BroadcastEvent extends PublicationEvent
{
}
