<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:AudioObject
 *
 * @property-read SchemaTypeList<Text>             $embeddedTextCaption Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
 * @property-read SchemaTypeList<Text|MediaObject> $caption             The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
 * @property-read SchemaTypeList<Text>             $transcript          If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
 */
interface AudioObject extends MediaObject
{
}
