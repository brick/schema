<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:TouristAttraction
 *
 * @property-read SchemaTypeList<Audience|Text> $touristType       Attraction suitable for type(s) of tourist. E.g. children, visitors from a particular country, etc. 
 * @property-read SchemaTypeList<Language|Text> $availableLanguage A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
 */
interface TouristAttraction extends Place
{
}
