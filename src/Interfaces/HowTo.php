<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:HowTo
 *
 * @property-read SchemaTypeList<Text|QuantitativeValue>                   $yield         The quantity that results by performing instructions. For example, a paper airplane, 10 personalized candles.
 * @property-read SchemaTypeList<Duration>                                 $performTime   The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<MonetaryAmount|Text>                      $estimatedCost The estimated cost of the supply or supplies consumed when performing instructions.
 * @property-read SchemaTypeList<Text|HowToSection|HowToStep|CreativeWork> $step          A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
 * @property-read SchemaTypeList<Duration>                                 $prepTime      The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<Text|CreativeWork|ItemList>               $steps         A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
 * @property-read SchemaTypeList<Duration>                                 $totalTime     The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<HowToTool|Text>                           $tool          A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
 * @property-read SchemaTypeList<Text|HowToSupply>                         $supply        A sub-property of instrument. A supply consumed when performing instructions or a direction.
 */
interface HowTo extends CreativeWork
{
}
