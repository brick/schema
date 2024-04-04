<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Diet
 *
 * @property-read SchemaTypeList<Text>                $expertConsiderations  Medical expert advice related to the plan.
 * @property-read SchemaTypeList<Text>                $dietFeatures          Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
 * @property-read SchemaTypeList<Person|Organization> $endorsers             People or organizations that endorse the plan.
 * @property-read SchemaTypeList<Text>                $risks                 Specific physiologic risks associated to the diet plan.
 * @property-read SchemaTypeList<Text>                $physiologicalBenefits Specific physiologic benefits associated to the plan.
 */
interface Diet extends CreativeWork, LifestyleModification
{
}
