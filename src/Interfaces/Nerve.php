<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Nerve
 *
 * @property-read SchemaTypeList<AnatomicalStructure|SuperficialAnatomy> $sensoryUnit The neurological pathway extension that inputs and sends information to the brain or spinal cord.
 * @property-read SchemaTypeList<AnatomicalStructure>                    $branch      The branches that delineate from the nerve bundle. Not to be confused with [[branchOf]].
 * @property-read SchemaTypeList<BrainStructure>                         $sourcedFrom The neurological pathway that originates the neurons.
 * @property-read SchemaTypeList<Muscle>                                 $nerveMotor  The neurological pathway extension that involves muscle control.
 */
interface Nerve extends AnatomicalStructure
{
}
