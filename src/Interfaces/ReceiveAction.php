<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:ReceiveAction
 *
 * @property-read SchemaTypeList<Organization|Audience|Person> $sender         A sub property of participant. The participant who is at the sending end of the action.
 * @property-read SchemaTypeList<DeliveryMethod>               $deliveryMethod A sub property of instrument. The method of delivery.
 */
interface ReceiveAction extends TransferAction
{
}
