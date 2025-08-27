<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalProcedure
 *
 * @property-read SchemaTypeList<MedicalProcedureType>                    $procedureType The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
 * @property-read SchemaTypeList<Text>                                    $followup      Typical or recommended followup care after the procedure is performed.
 * @property-read SchemaTypeList<MedicalStudyStatus|EventStatusType|Text> $status        The status of the study (enumerated).
 * @property-read SchemaTypeList<Text>                                    $howPerformed  How the procedure is performed.
 * @property-read SchemaTypeList<Text>                                    $bodyLocation  Location in the body of the anatomical structure.
 * @property-read SchemaTypeList<MedicalEntity|Text>                      $preparation   Typical preparation that a patient must undergo before having the procedure performed.
 */
interface MedicalProcedure extends MedicalEntity
{
}
