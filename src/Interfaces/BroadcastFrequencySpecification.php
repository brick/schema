<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;

/**
 * schema:BroadcastFrequencySpecification
 *
 * @property-read SchemaTypeList<QuantitativeValue|Number> $broadcastFrequencyValue   The frequency in MHz for a particular broadcast.
 * @property-read SchemaTypeList<Text|QualitativeValue>    $broadcastSignalModulation The modulation (e.g. FM, AM, etc) used by a particular broadcast service.
 * @property-read SchemaTypeList<Text>                     $broadcastSubChannel       The subchannel used for the broadcast.
 */
interface BroadcastFrequencySpecification extends Intangible
{
}
