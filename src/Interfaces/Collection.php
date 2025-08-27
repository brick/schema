<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Collection
 *
 * @property-read SchemaTypeList<Integer> $collectionSize The number of items in the [[Collection]].
 */
interface Collection extends CreativeWork
{
}
