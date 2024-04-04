<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:MedicalConditionStage
 *
 * @property-read SchemaTypeList<Text>   $subStageSuffix The substage, e.g. 'a' for Stage IIIa.
 * @property-read SchemaTypeList<Number> $stageAsNumber  The stage represented as a number, e.g. 3.
 */
interface MedicalConditionStage extends MedicalIntangible
{
}
