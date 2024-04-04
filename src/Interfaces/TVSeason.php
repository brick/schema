<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:TVSeason
 *
 * @property-read SchemaTypeList<Country>  $countryOfOrigin The country of origin of something, including products as well as creative  works such as movie and TV content.
 * @property-read SchemaTypeList<Text|URL> $titleEIDR       An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing at the most general/abstract level, a work of film or television.
 * @property-read SchemaTypeList<TVSeries> $partOfTVSeries  The TV series to which this episode or season belongs.
 */
interface TVSeason extends CreativeWorkSeason, CreativeWork
{
}
