<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MediaReviewItem
 *
 * @property-read SchemaTypeList<MediaObject> $mediaItemAppearance In the context of a [[MediaReview]], indicates specific media item(s) that are grouped using a [[MediaReviewItem]].
 */
interface MediaReviewItem extends CreativeWork
{
}
