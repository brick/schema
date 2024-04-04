<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MedicalSignOrSymptom
 *
 * @property-read SchemaTypeList<MedicalTherapy> $possibleTreatment A possible treatment to address this condition, sign or symptom.
 */
interface MedicalSignOrSymptom extends MedicalCondition
{
}
