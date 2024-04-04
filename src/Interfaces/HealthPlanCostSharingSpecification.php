<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:HealthPlanCostSharingSpecification
 *
 * @property-read SchemaTypeList<Text>               $healthPlanCoinsuranceOption Whether the coinsurance applies before or after deductible, etc. TODO: Is this a closed set?
 * @property-read SchemaTypeList<Text>               $healthPlanCopayOption       Whether the copay is before or after deductible, etc. TODO: Is this a closed set?
 * @property-read SchemaTypeList<Number>             $healthPlanCoinsuranceRate   The rate of coinsurance expressed as a number between 0.0 and 1.0.
 * @property-read SchemaTypeList<Text>               $healthPlanPharmacyCategory  The category or type of pharmacy associated with this cost sharing.
 * @property-read SchemaTypeList<PriceSpecification> $healthPlanCopay             The copay amount.
 */
interface HealthPlanCostSharingSpecification extends Intangible
{
}
