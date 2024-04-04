<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Substance
 *
 * @property-read SchemaTypeList<Text>                $activeIngredient An active ingredient, typically chemical compounds and/or biologic substances.
 * @property-read SchemaTypeList<MaximumDoseSchedule> $maximumIntake    Recommended intake of this supplement for a given population as defined by a specific recommending authority.
 */
interface Substance extends MedicalEntity
{
}
