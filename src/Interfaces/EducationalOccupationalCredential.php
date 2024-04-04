<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:EducationalOccupationalCredential
 *
 * @property-read SchemaTypeList<Text|URL|DefinedTerm> $competencyRequired Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something such as earn an Educational Occupational Credential or understand a LearningResource.
 * @property-read SchemaTypeList<Organization>         $recognizedBy       An organization that acknowledges the validity, value or utility of a credential. Note: recognition may include a process of quality assurance or accreditation.
 * @property-read SchemaTypeList<AdministrativeArea>   $validIn            The geographic area where the item is valid. Applies for example to a [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]]. 
 * @property-read SchemaTypeList<DefinedTerm|Text|URL> $credentialCategory The category or type of credential being described, for example "degree”, “certificate”, “badge”, or more specific term.
 * @property-read SchemaTypeList<Duration>             $validFor           The duration of validity of a permit or similar thing.
 * @property-read SchemaTypeList<Text|URL|DefinedTerm> $educationalLevel   The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
 */
interface EducationalOccupationalCredential extends CreativeWork
{
}
