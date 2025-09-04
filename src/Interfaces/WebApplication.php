<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\DataType\Text;
use Brick\Schema\SchemaTypeList;

/**
 * http://schema.org/WebApplication
 *
 * @property-read SchemaTypeList<Text> $browserRequirements Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
 */
interface WebApplication extends SoftwareApplication
{
}
