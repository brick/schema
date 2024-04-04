<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Chapter
 *
 * @property-read SchemaTypeList<Text>         $pagination Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
 * @property-read SchemaTypeList<Integer|Text> $pageStart  The page on which the work starts; for example "135" or "xiii".
 * @property-read SchemaTypeList<Integer|Text> $pageEnd    The page on which the work ends; for example "138" or "xvi".
 */
interface Chapter extends CreativeWork
{
}
