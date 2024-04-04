<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:DDxElement
 *
 * @property-read SchemaTypeList<MedicalCondition>     $diagnosis          One or more alternative conditions considered in the differential diagnosis process as output of a diagnosis process.
 * @property-read SchemaTypeList<MedicalSignOrSymptom> $distinguishingSign One of a set of signs and symptoms that can be used to distinguish this diagnosis from others in the differential diagnosis.
 */
interface DDxElement extends MedicalIntangible
{
}
