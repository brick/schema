<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalCode
 *
 * @property-read SchemaTypeList<Text> $codeValue    A short textual code that uniquely identifies the value.
 * @property-read SchemaTypeList<Text> $codingSystem The coding system, e.g. 'ICD-10'.
 */
interface MedicalCode extends MedicalIntangible, CategoryCode
{
}
