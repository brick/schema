<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MenuItem
 *
 * @property-read SchemaTypeList<NutritionInformation> $nutrition       Nutrition information about the recipe or menu item.
 * @property-read SchemaTypeList<RestrictedDiet>       $suitableForDiet Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
 * @property-read SchemaTypeList<MenuItem|MenuSection> $menuAddOn       Additional menu item(s) such as a side dish of salad or side order of fries that can be added to this menu item. Additionally it can be a menu section containing allowed add-on menu items for this menu item.
 * @property-read SchemaTypeList<Demand|Offer>         $offers          An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
 */
interface MenuItem extends Intangible
{
}
