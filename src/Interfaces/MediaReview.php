<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MediaReview
 *
 * @property-read SchemaTypeList<Text>                               $originalMediaContextDescription Describes, in a [[MediaReview]] when dealing with [[DecontextualizedContent]], background information that can contribute to better interpretation of the [[MediaObject]].
 * @property-read SchemaTypeList<URL|WebPage|MediaObject>            $originalMediaLink               Link to the page containing an original version of the content, or directly to an online copy of the original [[MediaObject]] content, e.g. video file.
 * @property-read SchemaTypeList<MediaManipulationRatingEnumeration> $mediaAuthenticityCategory       Indicates a MediaManipulationRatingEnumeration classification of a media object (in the context of how it was published or shared).
 */
interface MediaReview extends Review
{
}
