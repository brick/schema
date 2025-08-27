<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:ProductCollection
 *
 * @property-read SchemaTypeList<TypeAndQuantityNode> $includesObject This links to a node or nodes indicating the exact quantity of the products included in  an [[Offer]] or [[ProductCollection]].
 */
interface ProductCollection extends Collection, Product
{
}
