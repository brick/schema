<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:LegislationObject
 *
 * @property-read SchemaTypeList<LegalValueLevel> $legislationLegalValue The legal value of this legislation file. The same legislation can be written in multiple files with different legal values. Typically a digitally signed PDF have a "stronger" legal value than the HTML file of the same act.
 */
interface LegislationObject extends Legislation, MediaObject
{
}
