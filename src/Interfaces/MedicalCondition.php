<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalCondition
 *
 * @property-read SchemaTypeList<DDxElement>                                              $differentialDiagnosis One of a set of differential diagnoses for the condition. Specifically, a closely-related or competing diagnosis typically considered later in the cognitive process whereby this medical condition is distinguished from others most likely responsible for a similar collection of signs and symptoms to reach the most parsimonious diagnosis or diagnoses in a patient.
 * @property-read SchemaTypeList<Drug>                                                    $drug                  Specifying a drug or medicine used in a medication procedure.
 * @property-read SchemaTypeList<Text>                                                    $possibleComplication  A possible unexpected and unfavorable evolution of a medical condition. Complications may include worsening of the signs or symptoms of the disease, extension of the condition to other organ systems, etc.
 * @property-read SchemaTypeList<MedicalConditionStage>                                   $stage                 The stage of the condition, if applicable.
 * @property-read SchemaTypeList<Text>                                                    $naturalProgression    The expected progression of the condition if it is not treated and allowed to progress naturally.
 * @property-read SchemaTypeList<Text>                                                    $epidemiology          The characteristics of associated patients, such as age, gender, race etc.
 * @property-read SchemaTypeList<MedicalTherapy>                                          $primaryPrevention     A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
 * @property-read SchemaTypeList<AnatomicalSystem|SuperficialAnatomy|AnatomicalStructure> $associatedAnatomy     The anatomy of the underlying organ system or structures associated with this entity.
 * @property-read SchemaTypeList<MedicalStudyStatus|EventStatusType|Text>                 $status                The status of the study (enumerated).
 * @property-read SchemaTypeList<MedicalSignOrSymptom>                                    $signOrSymptom         A sign or symptom of this condition. Signs are objective or physically observable manifestations of the medical condition while symptoms are the subjective experience of the medical condition.
 * @property-read SchemaTypeList<MedicalTest>                                             $typicalTest           A medical test typically performed given this condition.
 * @property-read SchemaTypeList<MedicalTherapy>                                          $possibleTreatment     A possible treatment to address this condition, sign or symptom.
 * @property-read SchemaTypeList<MedicalRiskFactor>                                       $riskFactor            A modifiable or non-modifiable factor that increases the risk of a patient contracting this condition, e.g. age,  coexisting condition.
 * @property-read SchemaTypeList<Text>                                                    $pathophysiology       Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
 * @property-read SchemaTypeList<Text>                                                    $expectedPrognosis     The likely outcome in either the short term or long term of the medical condition.
 * @property-read SchemaTypeList<MedicalTherapy>                                          $secondaryPrevention   A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
 */
interface MedicalCondition extends MedicalEntity
{
}
