<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Taxon
 *
 * @property-read SchemaTypeList<PropertyValue|Text|URL> $taxonRank      The taxonomic rank of this taxon given preferably as a URI from a controlled vocabulary – typically the ranks from TDWG TaxonRank ontology or equivalent Wikidata URIs.
 * @property-read SchemaTypeList<Taxon|Text|URL>         $childTaxon     Closest child taxa of the taxon in question.
 * @property-read SchemaTypeList<Taxon|Text|URL>         $parentTaxon    Closest parent taxon of the taxon in question.
 * @property-read SchemaTypeList<DefinedTerm>            $hasDefinedTerm A Defined Term contained in this term set.
 */
interface Taxon extends Thing
{
}
