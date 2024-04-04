<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MedicalCause
 *
 * @property-read SchemaTypeList<MedicalEntity> $causeOf The condition, complication, symptom, sign, etc. caused.
 */
interface MedicalCause extends MedicalEntity
{
}
