<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:ListItem
 *
 * @property-read SchemaTypeList<ListItem>     $nextItem     A link to the ListItem that follows the current one.
 * @property-read SchemaTypeList<Thing>        $item         An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists').
 * @property-read SchemaTypeList<ListItem>     $previousItem A link to the ListItem that precedes the current one.
 * @property-read SchemaTypeList<Integer|Text> $position     The position of an item in a series or sequence of items.
 */
interface ListItem extends Intangible
{
}
