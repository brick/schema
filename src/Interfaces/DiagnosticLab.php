<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:DiagnosticLab
 *
 * @property-read SchemaTypeList<MedicalTest> $availableTest A diagnostic test or procedure offered by this lab.
 */
interface DiagnosticLab extends MedicalOrganization
{
}
