<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:LearningResource
 *
 * @property-read SchemaTypeList<Text|URL|DefinedTerm> $competencyRequired   Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something such as earn an Educational Occupational Credential or understand a LearningResource.
 * @property-read SchemaTypeList<Text|DefinedTerm>     $assesses             The item being described is intended to assess the competency or learning outcome defined by the referenced term.
 * @property-read SchemaTypeList<Text|DefinedTerm>     $educationalUse       The purpose of a work in the context of education; for example, 'assignment', 'group work'.
 * @property-read SchemaTypeList<DefinedTerm|Text>     $learningResourceType The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
 * @property-read SchemaTypeList<AlignmentObject>      $educationalAlignment An alignment to an established educational framework.
 * @property-read SchemaTypeList<Text|DefinedTerm>     $teaches              The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
 * @property-read SchemaTypeList<Text|URL|DefinedTerm> $educationalLevel     The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
 */
interface LearningResource extends CreativeWork
{
}
