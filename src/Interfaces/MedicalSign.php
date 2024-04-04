<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MedicalSign
 *
 * @property-read SchemaTypeList<PhysicalExam> $identifyingExam A physical examination that can identify this sign.
 * @property-read SchemaTypeList<MedicalTest>  $identifyingTest A diagnostic test that can identify this sign.
 */
interface MedicalSign extends MedicalSignOrSymptom
{
}
