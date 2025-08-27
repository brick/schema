<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Enumeration
 *
 * @property-read SchemaTypeList<Class|Enumeration|Property> $supersededBy Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
 */
interface Enumeration extends Intangible
{
}
