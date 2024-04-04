<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Boolean;

/**
 * schema:DietarySupplement
 *
 * @property-read SchemaTypeList<Text>                                    $activeIngredient    An active ingredient, typically chemical compounds and/or biologic substances.
 * @property-read SchemaTypeList<MaximumDoseSchedule>                     $maximumIntake       Recommended intake of this supplement for a given population as defined by a specific recommending authority.
 * @property-read SchemaTypeList<Text>                                    $targetPopulation    Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
 * @property-read SchemaTypeList<Text|DrugLegalStatus|MedicalEnumeration> $legalStatus         The drug or supplement's legal status, including any controlled substance schedules that apply.
 * @property-read SchemaTypeList<RecommendedDoseSchedule>                 $recommendedIntake   Recommended intake of this supplement for a given population as defined by a specific recommending authority.
 * @property-read SchemaTypeList<Text>                                    $nonProprietaryName  The generic name of this drug or supplement.
 * @property-read SchemaTypeList<Text>                                    $mechanismOfAction   The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
 * @property-read SchemaTypeList<Boolean>                                 $isProprietary       True if this item's name is a proprietary/brand name (vs. generic name).
 * @property-read SchemaTypeList<Text>                                    $safetyConsideration Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
 * @property-read SchemaTypeList<Text>                                    $proprietaryName     Proprietary name given to the diet plan, typically by its originator or creator.
 */
interface DietarySupplement extends Product, Substance
{
}
