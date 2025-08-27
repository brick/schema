<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Boolean;
use Brick\Schema\DataType\Text;

/**
 * schema:HealthPlanFormulary
 *
 * @property-read SchemaTypeList<Boolean> $offersPrescriptionByMail Whether prescriptions can be delivered by mail.
 * @property-read SchemaTypeList<Boolean> $healthPlanCostSharing    The costs to the patient for services under this network or formulary.
 * @property-read SchemaTypeList<Text>    $healthPlanDrugTier       The tier(s) of drugs offered by this formulary or insurance plan.
 */
interface HealthPlanFormulary extends Intangible
{
}
