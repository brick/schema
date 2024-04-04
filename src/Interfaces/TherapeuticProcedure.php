<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:TherapeuticProcedure
 *
 * @property-read SchemaTypeList<Drug>          $drug           Specifying a drug or medicine used in a medication procedure.
 * @property-read SchemaTypeList<MedicalEntity> $adverseOutcome A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.
 * @property-read SchemaTypeList<DoseSchedule>  $doseSchedule   A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
 */
interface TherapeuticProcedure extends MedicalProcedure
{
}
