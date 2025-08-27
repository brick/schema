<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:NutritionInformation
 *
 * @property-read SchemaTypeList<Mass>   $cholesterolContent    The number of milligrams of cholesterol.
 * @property-read SchemaTypeList<Mass>   $sodiumContent         The number of milligrams of sodium.
 * @property-read SchemaTypeList<Mass>   $saturatedFatContent   The number of grams of saturated fat.
 * @property-read SchemaTypeList<Text>   $servingSize           The serving size, in terms of the number of volume or mass.
 * @property-read SchemaTypeList<Mass>   $proteinContent        The number of grams of protein.
 * @property-read SchemaTypeList<Mass>   $transFatContent       The number of grams of trans fat.
 * @property-read SchemaTypeList<Mass>   $unsaturatedFatContent The number of grams of unsaturated fat.
 * @property-read SchemaTypeList<Energy> $calories              The number of calories.
 * @property-read SchemaTypeList<Mass>   $fatContent            The number of grams of fat.
 * @property-read SchemaTypeList<Mass>   $sugarContent          The number of grams of sugar.
 * @property-read SchemaTypeList<Mass>   $carbohydrateContent   The number of grams of carbohydrates.
 * @property-read SchemaTypeList<Mass>   $fiberContent          The number of grams of fiber.
 */
interface NutritionInformation extends StructuredValue
{
}
