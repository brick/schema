<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Gene
 *
 * @property-read SchemaTypeList<BioChemEntity>                                                  $encodesBioChemEntity  Another BioChemEntity encoded by this one. 
 * @property-read SchemaTypeList<Text>                                                           $hasBioPolymerSequence A symbolic representation of a BioChemEntity. For example, a nucleotide sequence of a Gene or an amino acid sequence of a Protein.
 * @property-read SchemaTypeList<Gene>                                                           $alternativeOf         Another gene which is a variation of this one.
 * @property-read SchemaTypeList<DefinedTerm|AnatomicalSystem|AnatomicalStructure|BioChemEntity> $expressedIn           Tissue, organ, biological sample, etc in which activity of this gene has been observed experimentally. For example brain, digestive system.
 */
interface Gene extends BioChemEntity
{
}
