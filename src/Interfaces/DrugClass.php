<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:DrugClass
 *
 * @property-read SchemaTypeList<Drug> $drug Specifying a drug or medicine used in a medication procedure.
 */
interface DrugClass extends MedicalEntity
{
}
