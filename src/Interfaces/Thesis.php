<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Thesis
 *
 * @property-read SchemaTypeList<Text> $inSupportOf Qualification, candidature, degree, application that Thesis supports.
 */
interface Thesis extends CreativeWork
{
}
