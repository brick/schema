<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\DataType\Text;
use Brick\Schema\SchemaTypeList;

/**
 * http://schema.org/Report
 *
 * @property-read SchemaTypeList<Text> $reportNumber The number or other unique designator assigned to a Report by the publishing organization.
 */
interface Report extends Article
{
}
