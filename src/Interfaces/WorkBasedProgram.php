<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:WorkBasedProgram
 *
 * @property-read SchemaTypeList<Text|CategoryCode>          $occupationalCategory A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
 * @property-read SchemaTypeList<MonetaryAmountDistribution> $trainingSalary       The estimated salary earned while in the program.
 */
interface WorkBasedProgram extends EducationalOccupationalProgram
{
}
