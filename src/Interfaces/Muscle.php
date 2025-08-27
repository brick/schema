<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Muscle
 *
 * @property-read SchemaTypeList<Vessel>              $bloodSupply  The blood vessel that carries blood from the heart to the muscle.
 * @property-read SchemaTypeList<Nerve>               $nerve        The underlying innervation associated with the muscle.
 * @property-read SchemaTypeList<Text>                $muscleAction The movement the muscle generates.
 * @property-read SchemaTypeList<Muscle>              $antagonist   The muscle whose action counteracts the specified muscle.
 * @property-read SchemaTypeList<AnatomicalStructure> $insertion    The place of attachment of a muscle, or what the muscle moves.
 */
interface Muscle extends AnatomicalStructure
{
}
