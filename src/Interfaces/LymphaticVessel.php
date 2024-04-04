<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:LymphaticVessel
 *
 * @property-read SchemaTypeList<AnatomicalSystem|AnatomicalStructure> $regionDrained  The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
 * @property-read SchemaTypeList<Vessel>                               $originatesFrom The vasculature the lymphatic structure originates, or afferents, from.
 * @property-read SchemaTypeList<Vessel>                               $runsTo         The vasculature the lymphatic structure runs, or efferents, to.
 */
interface LymphaticVessel extends Vessel
{
}
