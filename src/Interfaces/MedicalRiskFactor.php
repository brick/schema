<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MedicalRiskFactor
 *
 * @property-read SchemaTypeList<MedicalEntity> $increasesRiskOf The condition, complication, etc. influenced by this factor.
 */
interface MedicalRiskFactor extends MedicalEntity
{
}
