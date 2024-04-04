<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;

/**
 * schema:OccupationalExperienceRequirements
 *
 * @property-read SchemaTypeList<Number> $monthsOfExperience Indicates the minimal number of months of experience required for a position.
 */
interface OccupationalExperienceRequirements extends Intangible
{
}
