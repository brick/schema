<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:CategoryCode
 *
 * @property-read SchemaTypeList<Text>                $codeValue A short textual code that uniquely identifies the value.
 * @property-read SchemaTypeList<CategoryCodeSet|URL> $inCodeSet A [[CategoryCodeSet]] that contains this category code.
 */
interface CategoryCode extends DefinedTerm
{
}
