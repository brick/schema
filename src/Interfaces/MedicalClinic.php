<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MedicalClinic
 *
 * @property-read SchemaTypeList<MedicalTest|MedicalProcedure|MedicalTherapy> $availableService A medical service available from this provider.
 * @property-read SchemaTypeList<MedicalSpecialty>                            $medicalSpecialty A medical specialty of the provider.
 */
interface MedicalClinic extends MedicalBusiness, MedicalOrganization
{
}
