<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:ItemList
 *
 * @property-read SchemaTypeList<Text|Thing|ListItem>    $itemListElement For itemListElement values, you can use simple strings (e.g. "Peter", "Paul", "Mary"), existing entities, or use ListItem.\n\nText values are best if the elements in the list are plain strings. Existing entities are best for a simple, unordered list of existing things in your data. ListItem is used with ordered lists when you want to provide additional context about the element in that list or when the same item might be in different places in different lists.\n\nNote: The order of elements in your mark-up is not sufficient for indicating the order or elements.  Use ListItem with a 'position' property in such cases.
 * @property-read SchemaTypeList<ItemListOrderType|Text> $itemListOrder   Type of ordering (e.g. Ascending, Descending, Unordered).
 * @property-read SchemaTypeList<Integer>                $numberOfItems   The number of items in an ItemList. Note that some descriptions might not fully describe all items in a list (e.g., multi-page pagination); in such cases, the numberOfItems would be for the entire list.
 */
interface ItemList extends Intangible
{
}
