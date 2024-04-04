<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:LinkRole
 *
 * @property-read SchemaTypeList<Text>          $linkRelationship Indicates the relationship type of a Web link. 
 * @property-read SchemaTypeList<Text|Language> $inLanguage       The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
 */
interface LinkRole extends Role
{
}
