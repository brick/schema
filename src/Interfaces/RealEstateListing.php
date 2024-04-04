<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;

/**
 * schema:RealEstateListing
 *
 * @property-read SchemaTypeList<Date|DateTime>              $datePosted  Publication date of an online listing.
 * @property-read SchemaTypeList<QuantitativeValue|Duration> $leaseLength Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
 */
interface RealEstateListing extends WebPage
{
}
