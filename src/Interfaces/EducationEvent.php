<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:EducationEvent
 *
 * @property-read SchemaTypeList<Text|DefinedTerm>     $assesses         The item being described is intended to assess the competency or learning outcome defined by the referenced term.
 * @property-read SchemaTypeList<Text|DefinedTerm>     $teaches          The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
 * @property-read SchemaTypeList<Text|URL|DefinedTerm> $educationalLevel The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
 */
interface EducationEvent extends Event
{
}
