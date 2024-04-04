<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MedicalObservationalStudy
 *
 * @property-read SchemaTypeList<MedicalObservationalStudyDesign> $studyDesign Specifics about the observational study design (enumerated).
 */
interface MedicalObservationalStudy extends MedicalStudy
{
}
