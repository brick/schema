<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:CategoryCodeSet
 *
 * @property-read SchemaTypeList<CategoryCode> $hasCategoryCode A Category code contained in this code set.
 */
interface CategoryCodeSet extends DefinedTermSet
{
}
