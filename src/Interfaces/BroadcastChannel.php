<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:BroadcastChannel
 *
 * @property-read SchemaTypeList<CableOrSatelliteService>              $inBroadcastLineup        The CableOrSatelliteService offering the channel.
 * @property-read SchemaTypeList<URL|Text>                             $genre                    Genre of the creative work, broadcast channel or group.
 * @property-read SchemaTypeList<Text>                                 $broadcastServiceTier     The type of service required to have access to the channel (e.g. Standard or Premium).
 * @property-read SchemaTypeList<BroadcastFrequencySpecification|Text> $broadcastFrequency       The frequency used for over-the-air broadcasts. Numeric values or simple ranges, e.g. 87-99. In addition a shortcut idiom is supported for frequences of AM and FM radio channels, e.g. "87 FM".
 * @property-read SchemaTypeList<Text>                                 $broadcastChannelId       The unique address by which the BroadcastService can be identified in a provider lineup. In US, this is typically a number.
 * @property-read SchemaTypeList<BroadcastService>                     $providesBroadcastService The BroadcastService offered on this channel.
 */
interface BroadcastChannel extends Intangible
{
}
