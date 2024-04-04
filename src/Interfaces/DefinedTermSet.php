<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:DefinedTermSet
 *
 * @property-read SchemaTypeList<DefinedTerm> $hasDefinedTerm A Defined Term contained in this term set.
 */
interface DefinedTermSet extends CreativeWork
{
}
