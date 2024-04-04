<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Boolean;

/**
 * schema:Drug
 *
 * @property-read SchemaTypeList<Text>                                    $dosageForm                    A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
 * @property-read SchemaTypeList<Text>                                    $overdosage                    Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
 * @property-read SchemaTypeList<Text>                                    $activeIngredient              An active ingredient, typically chemical compounds and/or biologic substances.
 * @property-read SchemaTypeList<MaximumDoseSchedule>                     $maximumIntake                 Recommended intake of this supplement for a given population as defined by a specific recommending authority.
 * @property-read SchemaTypeList<DrugPregnancyCategory>                   $pregnancyCategory             Pregnancy category of this drug.
 * @property-read SchemaTypeList<Boolean>                                 $isAvailableGenerically        True if the drug is available in a generic form (regardless of name).
 * @property-read SchemaTypeList<Text>                                    $pregnancyWarning              Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
 * @property-read SchemaTypeList<HealthInsurancePlan>                     $includedInHealthInsurancePlan The insurance plans that cover this drug.
 * @property-read SchemaTypeList<Text|DrugLegalStatus|MedicalEnumeration> $legalStatus                   The drug or supplement's legal status, including any controlled substance schedules that apply.
 * @property-read SchemaTypeList<Text|URL>                                $warning                       Any FDA or other warnings about the drug (text or URL).
 * @property-read SchemaTypeList<DoseSchedule>                            $doseSchedule                  A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
 * @property-read SchemaTypeList<DrugClass>                               $drugClass                     The class of drug this belongs to (e.g., statins).
 * @property-read SchemaTypeList<URL>                                     $prescribingInfo               Link to prescribing information for the drug.
 * @property-read SchemaTypeList<DrugStrength>                            $availableStrength             An available dosage strength for the drug.
 * @property-read SchemaTypeList<Text>                                    $administrationRoute           A route by which this drug may be administered, e.g. 'oral'.
 * @property-read SchemaTypeList<Text>                                    $breastfeedingWarning          Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
 * @property-read SchemaTypeList<Text>                                    $foodWarning                   Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
 * @property-read SchemaTypeList<Text>                                    $clincalPharmacology           Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
 * @property-read SchemaTypeList<Text>                                    $drugUnit                      The unit in which the drug is measured, e.g. '5 mg tablet'.
 * @property-read SchemaTypeList<Drug>                                    $interactingDrug               Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
 * @property-read SchemaTypeList<URL>                                     $labelDetails                  Link to the drug's label details.
 * @property-read SchemaTypeList<Text|DrugPrescriptionStatus>             $prescriptionStatus            Indicates the status of drug prescription, e.g. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
 * @property-read SchemaTypeList<Text>                                    $nonProprietaryName            The generic name of this drug or supplement.
 * @property-read SchemaTypeList<Text>                                    $mechanismOfAction             The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
 * @property-read SchemaTypeList<Boolean>                                 $isProprietary                 True if this item's name is a proprietary/brand name (vs. generic name).
 * @property-read SchemaTypeList<Text>                                    $alcoholWarning                Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
 * @property-read SchemaTypeList<Text>                                    $rxcui                         The RxCUI drug identifier from RXNORM.
 * @property-read SchemaTypeList<Text>                                    $clinicalPharmacology          Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
 * @property-read SchemaTypeList<Text>                                    $proprietaryName               Proprietary name given to the diet plan, typically by its originator or creator.
 * @property-read SchemaTypeList<Drug>                                    $relatedDrug                   Any other drug related to this one, for example commonly-prescribed alternatives.
 */
interface Drug extends Product, Substance
{
}
