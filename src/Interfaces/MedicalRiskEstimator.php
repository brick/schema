<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MedicalRiskEstimator
 *
 * @property-read SchemaTypeList<MedicalRiskFactor> $includedRiskFactor A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
 * @property-read SchemaTypeList<MedicalEntity>     $estimatesRiskOf    The condition, complication, or symptom whose risk is being estimated.
 */
interface MedicalRiskEstimator extends MedicalEntity
{
}
