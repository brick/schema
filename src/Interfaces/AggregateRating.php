<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:AggregateRating
 *
 * @property-read SchemaTypeList<Integer> $reviewCount  The count of total number of reviews.
 * @property-read SchemaTypeList<Thing>   $itemReviewed The item that is being reviewed/rated.
 * @property-read SchemaTypeList<Integer> $ratingCount  The count of total number of ratings.
 */
interface AggregateRating extends Rating
{
}
