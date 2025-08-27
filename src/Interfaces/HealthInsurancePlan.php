<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:HealthInsurancePlan
 *
 * @property-read SchemaTypeList<HealthPlanFormulary> $includesHealthPlanFormulary Formularies covered by this plan.
 * @property-read SchemaTypeList<ContactPoint>        $contactPoint                A contact point for a person or organization.
 * @property-read SchemaTypeList<Text>                $healthPlanDrugTier          The tier(s) of drugs offered by this formulary or insurance plan.
 * @property-read SchemaTypeList<URL>                 $benefitsSummaryUrl          The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
 * @property-read SchemaTypeList<Text|URL>            $usesHealthPlanIdStandard    The standard for interpreting the Plan ID. The preferred is "HIOS". See the Centers for Medicare & Medicaid Services for more details.
 * @property-read SchemaTypeList<Text>                $healthPlanId                The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
 * @property-read SchemaTypeList<HealthPlanNetwork>   $includesHealthPlanNetwork   Networks covered by this plan.
 * @property-read SchemaTypeList<Text>                $healthPlanDrugOption        TODO.
 * @property-read SchemaTypeList<URL>                 $healthPlanMarketingUrl      The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
 */
interface HealthInsurancePlan extends Intangible
{
}
