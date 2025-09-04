<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\DataType\Text;
use Brick\Schema\SchemaTypeList;

/**
 * http://schema.org/DataFeed
 *
 * @property-read SchemaTypeList<Thing|Text|DataFeedItem> $dataFeedElement An item within in a data feed. Data feeds may have many elements.
 */
interface DataFeed extends Dataset
{
}
