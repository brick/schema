<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Vein
 *
 * @property-read SchemaTypeList<Vessel>                               $drainsTo      The vasculature that the vein drains into.
 * @property-read SchemaTypeList<AnatomicalSystem|AnatomicalStructure> $regionDrained The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
 * @property-read SchemaTypeList<AnatomicalStructure>                  $tributary     The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
 */
interface Vein extends Vessel
{
}
