<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:DefinedTerm
 *
 * @property-read SchemaTypeList<Text>               $termCode         A code that identifies this [[DefinedTerm]] within a [[DefinedTermSet]].
 * @property-read SchemaTypeList<URL|DefinedTermSet> $inDefinedTermSet A [[DefinedTermSet]] that contains this term.
 */
interface DefinedTerm extends Intangible
{
}
