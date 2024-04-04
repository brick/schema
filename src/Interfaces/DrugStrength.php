<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:DrugStrength
 *
 * @property-read SchemaTypeList<Text>                $activeIngredient An active ingredient, typically chemical compounds and/or biologic substances.
 * @property-read SchemaTypeList<MaximumDoseSchedule> $maximumIntake    Recommended intake of this supplement for a given population as defined by a specific recommending authority.
 * @property-read SchemaTypeList<Text>                $strengthUnit     The units of an active ingredient's strength, e.g. mg.
 * @property-read SchemaTypeList<Number>              $strengthValue    The value of an active ingredient's strength, e.g. 325.
 * @property-read SchemaTypeList<AdministrativeArea>  $availableIn      The location in which the strength is available.
 */
interface DrugStrength extends MedicalIntangible
{
}
