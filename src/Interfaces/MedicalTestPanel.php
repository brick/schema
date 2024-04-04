<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MedicalTestPanel
 *
 * @property-read SchemaTypeList<MedicalTest> $subTest A component test of the panel.
 */
interface MedicalTestPanel extends MedicalTest
{
}
