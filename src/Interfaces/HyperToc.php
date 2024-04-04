<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:HyperToc
 *
 * @property-read SchemaTypeList<MediaObject>   $associatedMedia A media object that encodes this CreativeWork. This property is a synonym for encoding.
 * @property-read SchemaTypeList<HyperTocEntry> $tocEntry        Indicates a [[HyperTocEntry]] in a [[HyperToc]].
 */
interface HyperToc extends CreativeWork
{
}
