<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Review
 *
 * @property-read SchemaTypeList<Rating>                            $reviewRating          The rating given in this review. Note that reviews can themselves be rated. The ```reviewRating``` applies to rating given by the review. The [[aggregateRating]] property applies to the review itself, as a creative work.
 * @property-read SchemaTypeList<Text>                              $reviewBody            The actual body of the review.
 * @property-read SchemaTypeList<Text>                              $reviewAspect          This Review or Rating is relevant to this part or facet of the itemReviewed.
 * @property-read SchemaTypeList<Review>                            $associatedReview      An associated [[Review]].
 * @property-read SchemaTypeList<Review>                            $associatedMediaReview An associated [[MediaReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
 * @property-read SchemaTypeList<Thing>                             $itemReviewed          The item that is being reviewed/rated.
 * @property-read SchemaTypeList<Review>                            $associatedClaimReview An associated [[ClaimReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
 * @property-read SchemaTypeList<ItemList|WebContent|Text|ListItem> $positiveNotes         Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.
 * @property-read SchemaTypeList<ItemList|Text|WebContent|ListItem> $negativeNotes         Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry 
 */
interface Review extends CreativeWork
{
}
