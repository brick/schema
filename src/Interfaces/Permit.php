<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;

/**
 * schema:Permit
 *
 * @property-read SchemaTypeList<Organization>       $issuedBy       The organization issuing the item, for example a [[Permit]], [[Ticket]], or [[Certification]].
 * @property-read SchemaTypeList<AdministrativeArea> $validIn        The geographic area where the item is valid. Applies for example to a [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]]. 
 * @property-read SchemaTypeList<Date|DateTime>      $validFrom      The date when the item becomes valid.
 * @property-read SchemaTypeList<Date>               $validUntil     The date when the item is no longer valid.
 * @property-read SchemaTypeList<Audience>           $permitAudience The target audience for this permit.
 * @property-read SchemaTypeList<Duration>           $validFor       The duration of validity of a permit or similar thing.
 * @property-read SchemaTypeList<Service>            $issuedThrough  The service through which the permit was granted.
 */
interface Permit extends Intangible
{
}
