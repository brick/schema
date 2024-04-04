<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MedicalTrial
 *
 * @property-read SchemaTypeList<MedicalTrialDesign> $trialDesign Specifics about the trial design (enumerated).
 */
interface MedicalTrial extends MedicalStudy
{
}
