<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Boolean;

/**
 * schema:ImageObject
 *
 * @property-read SchemaTypeList<Text>               $embeddedTextCaption  Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
 * @property-read SchemaTypeList<Text|MediaObject>   $caption              The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
 * @property-read SchemaTypeList<Boolean>            $representativeOfPage Indicates whether this image is representative of the content of the page.
 * @property-read SchemaTypeList<PropertyValue|Text> $exifData             exif data for this object.
 */
interface ImageObject extends MediaObject
{
}
