<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:ChemicalSubstance
 *
 * @property-read SchemaTypeList<DefinedTerm> $potentialUse        Intended use of the BioChemEntity by humans.
 * @property-read SchemaTypeList<Text>        $chemicalComposition The chemical composition describes the identity and relative ratio of the chemical elements that make up the substance.
 * @property-read SchemaTypeList<DefinedTerm> $chemicalRole        A role played by the BioChemEntity within a chemical context.
 */
interface ChemicalSubstance extends BioChemEntity
{
}
