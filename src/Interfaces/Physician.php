<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Physician
 *
 * @property-read SchemaTypeList<MedicalTest|MedicalProcedure|MedicalTherapy> $availableService     A medical service available from this provider.
 * @property-read SchemaTypeList<Text|CategoryCode>                           $occupationalCategory A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
 * @property-read SchemaTypeList<Hospital>                                    $hospitalAffiliation  A hospital with which the physician or office is affiliated.
 * @property-read SchemaTypeList<MedicalSpecialty>                            $medicalSpecialty     A medical specialty of the provider.
 * @property-read SchemaTypeList<Text>                                        $usNPI                A National Provider Identifier (NPI) 
 */
interface Physician extends MedicalBusiness, MedicalOrganization
{
}
