<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:PhysicalActivity
 *
 * @property-read SchemaTypeList<Text>                                                    $epidemiology      The characteristics of associated patients, such as age, gender, race etc.
 * @property-read SchemaTypeList<AnatomicalSystem|SuperficialAnatomy|AnatomicalStructure> $associatedAnatomy The anatomy of the underlying organ system or structures associated with this entity.
 * @property-read SchemaTypeList<Text|URL|CategoryCode|PhysicalActivityCategory|Thing>    $category          A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
 * @property-read SchemaTypeList<Text>                                                    $pathophysiology   Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
 */
interface PhysicalActivity extends LifestyleModification
{
}
