<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:SendAction
 *
 * @property-read SchemaTypeList<DeliveryMethod>                            $deliveryMethod A sub property of instrument. The method of delivery.
 * @property-read SchemaTypeList<Organization|Audience|Person|ContactPoint> $recipient      A sub property of participant. The participant who is at the receiving end of the action.
 */
interface SendAction extends TransferAction
{
}
