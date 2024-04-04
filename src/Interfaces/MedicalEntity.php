<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalEntity
 *
 * @property-read SchemaTypeList<Organization>                            $recognizingAuthority If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
 * @property-read SchemaTypeList<MedicalSpecialty>                        $relevantSpecialty    If applicable, a medical specialty in which this entity is relevant.
 * @property-read SchemaTypeList<MedicalCode>                             $code                 A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
 * @property-read SchemaTypeList<Text|DrugLegalStatus|MedicalEnumeration> $legalStatus          The drug or supplement's legal status, including any controlled substance schedules that apply.
 * @property-read SchemaTypeList<Grant>                                   $funding              A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
 * @property-read SchemaTypeList<MedicalStudy>                            $study                A medical study or trial related to this entity.
 * @property-read SchemaTypeList<MedicalGuideline>                        $guideline            A medical guideline related to this entity.
 * @property-read SchemaTypeList<MedicineSystem>                          $medicineSystem       The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
 */
interface MedicalEntity extends Thing
{
}
