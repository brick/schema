<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:TVClip
 *
 * @property-read SchemaTypeList<TVSeries> $partOfTVSeries The TV series to which this episode or season belongs.
 */
interface TVClip extends Clip
{
}
