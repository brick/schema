<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;

/**
 * schema:MerchantReturnPolicySeasonalOverride
 *
 * @property-read SchemaTypeList<Date|DateTime>             $endDate              The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
 * @property-read SchemaTypeList<MerchantReturnEnumeration> $returnPolicyCategory Specifies an applicable return policy (from an enumeration).
 * @property-read SchemaTypeList<Integer|Date|DateTime>     $merchantReturnDays   Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned. Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
 * @property-read SchemaTypeList<Date|DateTime>             $startDate            The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
 */
interface MerchantReturnPolicySeasonalOverride extends Intangible
{
}
