<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;

/**
 * schema:Occupation
 *
 * @property-read SchemaTypeList<MonetaryAmountDistribution|MonetaryAmount|Number> $estimatedSalary        An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
 * @property-read SchemaTypeList<Text|CategoryCode>                                $occupationalCategory   A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
 * @property-read SchemaTypeList<AdministrativeArea>                               $occupationLocation      The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
 * @property-read SchemaTypeList<DefinedTerm|Text>                                 $skills                 A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill this role or to work in this occupation.
 * @property-read SchemaTypeList<Text|OccupationalExperienceRequirements>          $experienceRequirements Description of skills and experience needed for the position or Occupation.
 * @property-read SchemaTypeList<Text|EducationalOccupationalCredential>           $educationRequirements  Educational background needed for the position or Occupation.
 * @property-read SchemaTypeList<EducationalOccupationalCredential|Text>           $qualifications         Specific qualifications required for this role or Occupation.
 * @property-read SchemaTypeList<Text>                                             $responsibilities       Responsibilities associated with this role or Occupation.
 */
interface Occupation extends Intangible
{
}
