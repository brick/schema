<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:VideoObject
 *
 * @property-read SchemaTypeList<Text>              $embeddedTextCaption Represents textual captioning from a [[MediaObject]], e.g. text of a 'meme'.
 * @property-read SchemaTypeList<Text>              $videoFrameSize      The frame size of the video.
 * @property-read SchemaTypeList<Person>            $director            A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Text|MediaObject>  $caption             The caption for this object. For downloadable machine formats (closed caption, subtitles etc.) use MediaObject and indicate the [[encodingFormat]].
 * @property-read SchemaTypeList<Person>            $directors           A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Text>              $transcript          If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
 * @property-read SchemaTypeList<Text>              $videoQuality        The quality of the video.
 * @property-read SchemaTypeList<Person>            $actors              An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Person>            $actor               An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Person|MusicGroup> $musicBy             The composer of the soundtrack.
 */
interface VideoObject extends MediaObject
{
}
