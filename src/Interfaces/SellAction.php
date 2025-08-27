<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:SellAction
 *
 * @property-read SchemaTypeList<Person|Organization> $buyer           A sub property of participant. The participant/person/organization that bought the object.
 * @property-read SchemaTypeList<WarrantyPromise>     $warrantyPromise The warranty promise(s) included in the offer.
 */
interface SellAction extends TradeAction
{
}
