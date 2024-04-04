<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Patient
 *
 * @property-read SchemaTypeList<Drug>             $drug            Specifying a drug or medicine used in a medication procedure.
 * @property-read SchemaTypeList<MedicalCondition> $healthCondition Specifying the health condition(s) of a patient, medical study, or other target audience.
 * @property-read SchemaTypeList<MedicalCondition> $diagnosis       One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
 */
interface Patient extends Person, MedicalAudience
{
}
