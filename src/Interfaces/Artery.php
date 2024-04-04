<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Artery
 *
 * @property-read SchemaTypeList<AnatomicalStructure> $supplyTo       The area to which the artery supplies blood.
 * @property-read SchemaTypeList<AnatomicalStructure> $arterialBranch The branches that comprise the arterial structure.
 */
interface Artery extends Vessel
{
}
