<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:EducationalOrganization
 *
 * @property-read SchemaTypeList<Person> $alumni Alumni of an organization.
 */
interface EducationalOrganization extends Organization, CivicStructure
{
}
