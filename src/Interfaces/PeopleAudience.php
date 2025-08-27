<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;

/**
 * schema:PeopleAudience
 *
 * @property-read SchemaTypeList<Number>            $suggestedMaxAge      Maximum recommended age in years for the audience or user.
 * @property-read SchemaTypeList<Integer>           $requiredMinAge       Audiences defined by a person's minimum age.
 * @property-read SchemaTypeList<MedicalCondition>  $healthCondition      Specifying the health condition(s) of a patient, medical study, or other target audience.
 * @property-read SchemaTypeList<Integer>           $requiredMaxAge       Audiences defined by a person's maximum age.
 * @property-read SchemaTypeList<QuantitativeValue> $suggestedAge         The age or age range for the intended audience or person, for example 3-12 months for infants, 1-5 years for toddlers.
 * @property-read SchemaTypeList<Number>            $suggestedMinAge      Minimum recommended age in years for the audience or user.
 * @property-read SchemaTypeList<GenderType|Text>   $suggestedGender      The suggested gender of the intended person or audience, for example "male", "female", or "unisex".
 * @property-read SchemaTypeList<Text>              $requiredGender       Audiences defined by a person's gender.
 * @property-read SchemaTypeList<QuantitativeValue> $suggestedMeasurement A suggested range of body measurements for the intended audience or person, for example inseam between 32 and 34 inches or height between 170 and 190 cm. Typically found on a size chart for wearable products.
 */
interface PeopleAudience extends Audience
{
}
