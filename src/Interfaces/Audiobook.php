<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Audiobook
 *
 * @property-read SchemaTypeList<Duration> $duration The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<Person>   $readBy   A person who reads (performs) the audiobook.
 */
interface Audiobook extends Book, AudioObject
{
}
