<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:IndividualPhysician
 *
 * @property-read SchemaTypeList<MedicalOrganization> $practicesAt A [[MedicalOrganization]] where the [[IndividualPhysician]] practices.
 */
interface IndividualPhysician extends Physician
{
}
