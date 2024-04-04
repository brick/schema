<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Guide
 *
 * @property-read SchemaTypeList<Text> $reviewAspect This Review or Rating is relevant to this part or facet of the itemReviewed.
 */
interface Guide extends CreativeWork
{
}
