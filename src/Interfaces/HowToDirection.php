<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:HowToDirection
 *
 * @property-read SchemaTypeList<MediaObject|URL>  $afterMedia  A media object representing the circumstances after performing this direction.
 * @property-read SchemaTypeList<Duration>         $performTime The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<MediaObject|URL>  $duringMedia A media object representing the circumstances while performing this direction.
 * @property-read SchemaTypeList<MediaObject|URL>  $beforeMedia A media object representing the circumstances before performing this direction.
 * @property-read SchemaTypeList<Duration>         $prepTime    The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<Duration>         $totalTime   The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<HowToTool|Text>   $tool        A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
 * @property-read SchemaTypeList<Text|HowToSupply> $supply      A sub-property of instrument. A supply consumed when performing instructions or a direction.
 */
interface HowToDirection extends ListItem, CreativeWork
{
}
