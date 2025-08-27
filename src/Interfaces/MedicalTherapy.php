<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalTherapy
 *
 * @property-read SchemaTypeList<Text|MedicalContraindication> $contraindication      A contraindication for this therapy.
 * @property-read SchemaTypeList<MedicalTherapy>               $duplicateTherapy      A therapy that duplicates or overlaps this one.
 * @property-read SchemaTypeList<MedicalEntity>                $seriousAdverseOutcome A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
 */
interface MedicalTherapy extends TherapeuticProcedure
{
}
