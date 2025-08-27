<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Boolean;

/**
 * schema:HealthPlanNetwork
 *
 * @property-read SchemaTypeList<Text>    $healthPlanNetworkTier The tier(s) for this network.
 * @property-read SchemaTypeList<Boolean> $healthPlanCostSharing The costs to the patient for services under this network or formulary.
 * @property-read SchemaTypeList<Text>    $healthPlanNetworkId   Name or unique ID of network. (Networks are often reused across different insurance plans.)
 */
interface HealthPlanNetwork extends Intangible
{
}
