<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MolecularEntity
 *
 * @property-read SchemaTypeList<DefinedTerm>            $potentialUse                Intended use of the BioChemEntity by humans.
 * @property-read SchemaTypeList<Text>                   $iupacName                   Systematic method of naming chemical compounds as recommended by the International Union of Pure and Applied Chemistry (IUPAC).
 * @property-read SchemaTypeList<Text>                   $inChI                       Non-proprietary identifier for molecular entity that can be used in printed and electronic data sources thus enabling easier linking of diverse data compilations.
 * @property-read SchemaTypeList<Text>                   $molecularFormula            The empirical formula is the simplest whole number ratio of all the atoms in a molecule.
 * @property-read SchemaTypeList<Text|QuantitativeValue> $monoisotopicMolecularWeight The monoisotopic mass is the sum of the masses of the atoms in a molecule using the unbound, ground-state, rest mass of the principal (most abundant) isotope for each element instead of the isotopic average mass. Please include the units in the form '<Number> <unit>', for example '770.230488 g/mol' or as '<QuantitativeValue>.
 * @property-read SchemaTypeList<Text>                   $smiles                      A specification in form of a line notation for describing the structure of chemical species using short ASCII strings.  Double bond stereochemistry \ indicators may need to be escaped in the string in formats where the backslash is an escape character.
 * @property-read SchemaTypeList<DefinedTerm>            $chemicalRole                A role played by the BioChemEntity within a chemical context.
 * @property-read SchemaTypeList<Text>                   $inChIKey                    InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
 * @property-read SchemaTypeList<Text|QuantitativeValue> $molecularWeight             This is the molecular weight of the entity being described, not of the parent. Units should be included in the form '<Number> <unit>', for example '12 amu' or as '<QuantitativeValue>.
 */
interface MolecularEntity extends BioChemEntity
{
}
