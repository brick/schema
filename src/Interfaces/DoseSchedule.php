<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;

/**
 * schema:DoseSchedule
 *
 * @property-read SchemaTypeList<Number|QualitativeValue> $doseValue        The value of the dose, e.g. 500.
 * @property-read SchemaTypeList<Text>                    $targetPopulation Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
 * @property-read SchemaTypeList<Text>                    $doseUnit         The unit of the dose, e.g. 'mg'.
 * @property-read SchemaTypeList<Text>                    $frequency        How often the dose is taken, e.g. 'daily'.
 */
interface DoseSchedule extends MedicalIntangible
{
}
