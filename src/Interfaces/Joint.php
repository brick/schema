<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Joint
 *
 * @property-read SchemaTypeList<MedicalEntity|Text> $functionalClass   The degree of mobility the joint allows.
 * @property-read SchemaTypeList<Text>               $biomechnicalClass The biomechanical properties of the bone.
 * @property-read SchemaTypeList<Text>               $structuralClass   The name given to how bone physically connects to each other.
 */
interface Joint extends AnatomicalStructure
{
}
