<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:ScreeningEvent
 *
 * @property-read SchemaTypeList<Movie>         $workPresented    The movie presented during this event.
 * @property-read SchemaTypeList<Text|Language> $subtitleLanguage Languages in which subtitles/captions are available, in [IETF BCP 47 standard format](http://tools.ietf.org/html/bcp47).
 * @property-read SchemaTypeList<Text>          $videoFormat      The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
 */
interface ScreeningEvent extends Event
{
}
