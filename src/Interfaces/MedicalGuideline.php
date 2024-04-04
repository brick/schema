<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalGuideline
 *
 * @property-read SchemaTypeList<Date>                 $guidelineDate    Date on which this guideline's recommendation was made.
 * @property-read SchemaTypeList<MedicalEvidenceLevel> $evidenceLevel    Strength of evidence of the data used to formulate the guideline (enumerated).
 * @property-read SchemaTypeList<MedicalEntity>        $guidelineSubject The medical conditions, treatments, etc. that are the subject of the guideline.
 * @property-read SchemaTypeList<Text>                 $evidenceOrigin   Source of the data used to formulate the guidance, e.g. RCT, consensus opinion, etc.
 */
interface MedicalGuideline extends MedicalEntity
{
}
