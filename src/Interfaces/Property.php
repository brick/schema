<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Property
 *
 * @property-read SchemaTypeList<Class>                      $domainIncludes Relates a property to a class that is (one of) the type(s) the property is expected to be used on.
 * @property-read SchemaTypeList<Class|Enumeration|Property> $supersededBy   Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
 * @property-read SchemaTypeList<Property>                   $inverseOf      Relates a property to a property that is its inverse. Inverse properties relate the same pairs of items to each other, but in reversed direction. For example, the 'alumni' and 'alumniOf' properties are inverseOf each other. Some properties don't have explicit inverses; in these situations RDFa and JSON-LD syntax for reverse properties can be used.
 * @property-read SchemaTypeList<Class>                      $rangeIncludes  Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
 */
interface Property extends Intangible
{
}
