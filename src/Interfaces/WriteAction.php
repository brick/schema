<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:WriteAction
 *
 * @property-read SchemaTypeList<Text|Language> $inLanguage The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
 * @property-read SchemaTypeList<Language>      $language   A sub property of instrument. The language used on this action.
 */
interface WriteAction extends CreateAction
{
}
