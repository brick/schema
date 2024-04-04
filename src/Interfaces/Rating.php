<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:Rating
 *
 * @property-read SchemaTypeList<Text|Number>         $ratingValue       The rating for the content.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
 * @property-read SchemaTypeList<Text>                $ratingExplanation A short explanation (e.g. one to two sentences) providing background context and other information that led to the conclusion expressed in the rating. This is particularly applicable to ratings associated with "fact check" markup using [[ClaimReview]].
 * @property-read SchemaTypeList<Number|Text>         $bestRating        The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
 * @property-read SchemaTypeList<Person|Organization> $author            The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
 * @property-read SchemaTypeList<Number|Text>         $worstRating       The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
 * @property-read SchemaTypeList<Text>                $reviewAspect      This Review or Rating is relevant to this part or facet of the itemReviewed.
 */
interface Rating extends Intangible
{
}
