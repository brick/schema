<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MenuSection
 *
 * @property-read SchemaTypeList<MenuItem>    $hasMenuItem    A food or drink item contained in a menu or menu section.
 * @property-read SchemaTypeList<MenuSection> $hasMenuSection A subgrouping of the menu (by dishes, course, serving time period, etc.).
 */
interface MenuSection extends CreativeWork
{
}
