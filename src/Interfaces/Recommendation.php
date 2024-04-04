<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Recommendation
 *
 * @property-read SchemaTypeList<Text|URL|CategoryCode|PhysicalActivityCategory|Thing> $category A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
 */
interface Recommendation extends Review
{
}
