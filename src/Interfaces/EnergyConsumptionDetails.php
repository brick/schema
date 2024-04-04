<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:EnergyConsumptionDetails
 *
 * @property-read SchemaTypeList<EUEnergyEfficiencyEnumeration> $energyEfficiencyScaleMax    Specifies the most energy efficient class on the regulated EU energy consumption scale for the product category a product belongs to. For example, energy consumption for televisions placed on the market after January 1, 2020 is scaled from D to A+++.
 * @property-read SchemaTypeList<EnergyEfficiencyEnumeration>   $hasEnergyEfficiencyCategory Defines the energy efficiency Category (which could be either a rating out of range of values or a yes/no certification) for a product according to an international energy efficiency standard.
 * @property-read SchemaTypeList<EUEnergyEfficiencyEnumeration> $energyEfficiencyScaleMin    Specifies the least energy efficient class on the regulated EU energy consumption scale for the product category a product belongs to. For example, energy consumption for televisions placed on the market after January 1, 2020 is scaled from D to A+++.
 */
interface EnergyConsumptionDetails extends Intangible
{
}
