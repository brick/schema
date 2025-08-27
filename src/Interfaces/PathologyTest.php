<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:PathologyTest
 *
 * @property-read SchemaTypeList<Text> $tissueSample The type of tissue sample required for the test.
 */
interface PathologyTest extends MedicalTest
{
}
