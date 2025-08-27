<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Protein
 *
 * @property-read SchemaTypeList<Text> $hasBioPolymerSequence A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a Protein.
 */
interface Protein extends BioChemEntity
{
}
