<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:ProgramMembership
 *
 * @property-read SchemaTypeList<Organization>             $hostingOrganization    The organization (airline, travelers' club, etc.) the membership is made with.
 * @property-read SchemaTypeList<Text>                     $programName            The program providing the membership.
 * @property-read SchemaTypeList<Number|QuantitativeValue> $membershipPointsEarned The number of membership points earned by the member. If necessary, the unitText can be used to express the units the points are issued in. (E.g. stars, miles, etc.)
 * @property-read SchemaTypeList<Person|Organization>      $members                A member of this organization.
 * @property-read SchemaTypeList<Text>                     $membershipNumber       A unique identifier for the membership.
 * @property-read SchemaTypeList<Person|Organization>      $member                 A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
 */
interface ProgramMembership extends Intangible
{
}
