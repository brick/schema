<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:TouristDestination
 *
 * @property-read SchemaTypeList<Audience|Text>     $touristType        Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
 * @property-read SchemaTypeList<TouristAttraction> $includesAttraction Attraction located at destination.
 */
interface TouristDestination extends Place
{
}
