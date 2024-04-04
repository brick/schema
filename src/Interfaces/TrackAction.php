<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:TrackAction
 *
 * @property-read SchemaTypeList<DeliveryMethod> $deliveryMethod A sub property of instrument. The method of delivery.
 */
interface TrackAction extends FindAction
{
}
