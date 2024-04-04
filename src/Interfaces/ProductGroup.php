<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:ProductGroup
 *
 * @property-read SchemaTypeList<Text|DefinedTerm> $variesBy       Indicates the property or properties by which the variants in a [[ProductGroup]] vary, e.g. their size, color etc. Schema.org properties can be referenced by their short name e.g. "color"; terms defined elsewhere can be referenced with their URIs.
 * @property-read SchemaTypeList<Text>             $productGroupID Indicates a textual identifier for a ProductGroup.
 * @property-read SchemaTypeList<Product>          $hasVariant     Indicates a [[Product]] that is a member of this [[ProductGroup]] (or [[ProductModel]]).
 */
interface ProductGroup extends Product
{
}
