<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Hospital
 *
 * @property-read SchemaTypeList<MedicalTest|MedicalProcedure|MedicalTherapy> $availableService        A medical service available from this provider.
 * @property-read SchemaTypeList<MedicalSpecialty>                            $medicalSpecialty        A medical specialty of the provider.
 * @property-read SchemaTypeList<CDCPMDRecord|Dataset>                        $healthcareReportingData Indicates data describing a hospital, e.g. a CDC [[CDCPMDRecord]] or as some kind of [[Dataset]].
 */
interface Hospital extends EmergencyService, CivicStructure, MedicalOrganization
{
}
