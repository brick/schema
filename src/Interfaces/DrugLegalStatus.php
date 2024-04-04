<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:DrugLegalStatus
 *
 * @property-read SchemaTypeList<AdministrativeArea> $applicableLocation The location in which the status applies.
 */
interface DrugLegalStatus extends MedicalIntangible
{
}
