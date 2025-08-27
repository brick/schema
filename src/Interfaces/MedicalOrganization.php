<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Boolean;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalOrganization
 *
 * @property-read SchemaTypeList<Boolean>          $isAcceptingNewPatients Whether the provider is accepting new patients.
 * @property-read SchemaTypeList<MedicalSpecialty> $medicalSpecialty       A medical specialty of the provider.
 * @property-read SchemaTypeList<Text>             $healthPlanNetworkId    Name or unique ID of network. (Networks are often reused across different insurance plans.)
 */
interface MedicalOrganization extends Organization
{
}
