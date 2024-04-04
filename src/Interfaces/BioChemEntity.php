<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:BioChemEntity
 *
 * @property-read SchemaTypeList<BioChemEntity>                      $bioChemSimilarity              A similar BioChemEntity, e.g., obtained by fingerprint similarity algorithms.
 * @property-read SchemaTypeList<PropertyValue|Text|URL>             $hasRepresentation              A common representation such as a protein sequence or chemical structure for this entity. For images use schema.org/image.
 * @property-read SchemaTypeList<DefinedTerm|Taxon|Text|URL>         $taxonomicRange                 The taxonomic grouping of the organism that expresses, encodes, or in some way related to the BioChemEntity.
 * @property-read SchemaTypeList<URL|DefinedTerm|PropertyValue>      $hasMolecularFunction           Molecular function performed by this BioChemEntity; please use PropertyValue if you want to include any evidence.
 * @property-read SchemaTypeList<DefinedTerm|PropertyValue|URL>      $isInvolvedInBiologicalProcess  Biological process this BioChemEntity is involved in; please use PropertyValue if you want to include any evidence.
 * @property-read SchemaTypeList<BioChemEntity>                      $bioChemInteraction             A BioChemEntity that is known to interact with this item.
 * @property-read SchemaTypeList<Grant>                              $funding                        A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
 * @property-read SchemaTypeList<DefinedTerm>                        $biologicalRole                 A role played by the BioChemEntity within a biological context.
 * @property-read SchemaTypeList<BioChemEntity>                      $isPartOfBioChemEntity          Indicates a BioChemEntity that is (in some sense) a part of this BioChemEntity. 
 * @property-read SchemaTypeList<BioChemEntity>                      $hasBioChemEntityPart           Indicates a BioChemEntity that (in some sense) has this BioChemEntity as a part. 
 * @property-read SchemaTypeList<Gene>                               $isEncodedByBioChemEntity       Another BioChemEntity encoding by this one.
 * @property-read SchemaTypeList<URL|DefinedTerm|PropertyValue>      $isLocatedInSubcellularLocation Subcellular location where this BioChemEntity is located; please use PropertyValue if you want to include any evidence.
 * @property-read SchemaTypeList<MedicalCondition|URL|PropertyValue> $associatedDisease              Disease associated to this BioChemEntity. Such disease can be a MedicalCondition or a URL. If you want to add an evidence supporting the association, please use PropertyValue.
 */
interface BioChemEntity extends Thing
{
}
