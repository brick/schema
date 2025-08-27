<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:DataFeed
 *
 * @property-read SchemaTypeList<Text|DataFeedItem|Thing> $dataFeedElement An item within a data feed. Data feeds may have many elements.
 */
interface DataFeed extends Dataset
{
}
