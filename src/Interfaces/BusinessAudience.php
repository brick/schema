<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:BusinessAudience
 *
 * @property-read SchemaTypeList<QuantitativeValue> $numberOfEmployees The number of employees in an organization, e.g. business.
 * @property-read SchemaTypeList<QuantitativeValue> $yearsInOperation  The age of the business.
 * @property-read SchemaTypeList<QuantitativeValue> $yearlyRevenue     The size of the business in annual revenue.
 */
interface BusinessAudience extends Audience
{
}
