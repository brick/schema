<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalTest
 *
 * @property-read SchemaTypeList<MedicalSign>             $signDetected   A sign detected by the test.
 * @property-read SchemaTypeList<MedicalEnumeration|Text> $normalRange    Range of acceptable values for a typical patient, when applicable.
 * @property-read SchemaTypeList<MedicalDevice>           $usesDevice     Device used to perform the test.
 * @property-read SchemaTypeList<MedicalCondition>        $usedToDiagnose A condition the test is used to diagnose.
 * @property-read SchemaTypeList<Drug>                    $affectedBy     Drugs that affect the test's results.
 */
interface MedicalTest extends MedicalEntity
{
}
