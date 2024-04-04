<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalGuidelineRecommendation
 *
 * @property-read SchemaTypeList<Text> $recommendationStrength Strength of the guideline's recommendation (e.g. 'class I').
 */
interface MedicalGuidelineRecommendation extends MedicalGuideline
{
}
