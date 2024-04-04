<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;

/**
 * schema:EmployeeRole
 *
 * @property-read SchemaTypeList<PriceSpecification|MonetaryAmount|Number> $baseSalary     The base salary of the job or of an employee in an EmployeeRole.
 * @property-read SchemaTypeList<Text>                                     $salaryCurrency The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
 */
interface EmployeeRole extends OrganizationRole
{
}
