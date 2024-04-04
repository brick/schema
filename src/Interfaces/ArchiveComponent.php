<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:ArchiveComponent
 *
 * @property-read SchemaTypeList<ArchiveOrganization>      $holdingArchive [[ArchiveOrganization]] that holds, keeps or maintains the [[ArchiveComponent]].
 * @property-read SchemaTypeList<Text|Place|PostalAddress> $itemLocation   Current location of the item.
 */
interface ArchiveComponent extends CreativeWork
{
}
