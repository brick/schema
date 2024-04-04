<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalRiskScore
 *
 * @property-read SchemaTypeList<Text> $algorithm The algorithm or rules to follow to compute the score.
 */
interface MedicalRiskScore extends MedicalRiskEstimator
{
}
