<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:ImagingTest
 *
 * @property-read SchemaTypeList<MedicalImagingTechnique> $imagingTechnique Imaging technique used.
 */
interface ImagingTest extends MedicalTest
{
}
