<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Recipe
 *
 * @property-read SchemaTypeList<NutritionInformation>       $nutrition          Nutrition information about the recipe or menu item.
 * @property-read SchemaTypeList<RestrictedDiet>             $suitableForDiet    Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
 * @property-read SchemaTypeList<QuantitativeValue|Text>     $recipeYield        The quantity produced by the recipe (for example, number of people served, number of servings, etc).
 * @property-read SchemaTypeList<Text>                       $cookingMethod      The method of cooking, such as Frying, Steaming, ...
 * @property-read SchemaTypeList<Duration>                   $cookTime           The time it takes to actually cook the dish, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<Text>                       $recipeIngredient   A single ingredient used in the recipe, e.g. sugar, flour or garlic.
 * @property-read SchemaTypeList<ItemList|Text|CreativeWork> $recipeInstructions A step in making the recipe, in the form of a single item (document, video, etc.) or an ordered list with HowToStep and/or HowToSection items.
 * @property-read SchemaTypeList<Text>                       $recipeCuisine      The cuisine of the recipe (for example, French or Ethiopian).
 * @property-read SchemaTypeList<Text>                       $ingredients        A single ingredient used in the recipe, e.g. sugar, flour or garlic.
 * @property-read SchemaTypeList<Text>                       $recipeCategory     The category of the recipe—for example, appetizer, entree, etc.
 */
interface Recipe extends HowTo
{
}
