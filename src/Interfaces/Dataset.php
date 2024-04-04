<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Text;

/**
 * schema:Dataset
 *
 * @property-read SchemaTypeList<DataCatalog>                                     $catalog               A data catalog which contains this dataset.
 * @property-read SchemaTypeList<DateTime>                                        $datasetTimeInterval   The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
 * @property-read SchemaTypeList<DataDownload>                                    $distribution          A downloadable form of this dataset, at a specific location, in a specific format. This property can be repeated if different variations are available. There is no expectation that different downloadable distributions must contain exactly equivalent information (see also [DCAT](https://www.w3.org/TR/vocab-dcat-3/#Class:Distribution) on this point). Different distributions might include or exclude different subsets of the entire dataset, for example.
 * @property-read SchemaTypeList<DefinedTerm|MeasurementMethodEnum|Text|URL>      $measurementTechnique  A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable.
 * @property-read SchemaTypeList<DataCatalog>                                     $includedDataCatalog   A data catalog which contains this dataset (this property was previously 'catalog', preferred name is now 'includedInDataCatalog').
 * @property-read SchemaTypeList<Text>                                            $issn                  The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
 * @property-read SchemaTypeList<Text|Property|StatisticalVariable|PropertyValue> $variableMeasured      The variableMeasured property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue, or more explicitly as a [[StatisticalVariable]].
 * @property-read SchemaTypeList<URL|DefinedTerm|MeasurementMethodEnum|Text>      $measurementMethod     A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
 * @property-read SchemaTypeList<DataCatalog>                                     $includedInDataCatalog A data catalog which contains this dataset.
 */
interface Dataset extends CreativeWork
{
}
