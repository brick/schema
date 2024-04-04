<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;

/**
 * schema:SeekToAction
 *
 * @property-read SchemaTypeList<Number|HyperTocEntry> $startOffset The start time of the clip expressed as the number of seconds from the beginning of the work.
 */
interface SeekToAction extends Action
{
}
