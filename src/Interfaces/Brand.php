<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Brand
 *
 * @property-read SchemaTypeList<Text>            $slogan          A slogan or motto associated with the item.
 * @property-read SchemaTypeList<Review>          $review          A review of the item.
 * @property-read SchemaTypeList<URL|ImageObject> $logo            An associated logo.
 * @property-read SchemaTypeList<AggregateRating> $aggregateRating The overall rating, based on a collection of reviews or ratings, of the item.
 */
interface Brand extends Intangible
{
}
