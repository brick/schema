<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:StatisticalVariable
 *
 * @property-read SchemaTypeList<StatisticalVariable>                        $measurementDenominator Identifies the denominator variable when an observation represents a ratio or percentage.
 * @property-read SchemaTypeList<Property>                                   $measuredProperty       The measuredProperty of an [[Observation]], typically via its [[StatisticalVariable]]. There are various kinds of applicable [[Property]]: a schema.org property, a property from other RDF-compatible systems, e.g. W3C RDF Data Cube, Data Commons, Wikidata, or schema.org extensions such as [GS1's](https://www.gs1.org/voc/?show=properties).
 * @property-read SchemaTypeList<DefinedTerm|MeasurementMethodEnum|Text|URL> $measurementTechnique   A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable.
 * @property-read SchemaTypeList<Text|URL|Property>                          $statType               Indicates the kind of statistic represented by a [[StatisticalVariable]], e.g. mean, count etc. The value of statType is a property, either from within Schema.org (e.g. [[count]], [[median]], [[marginOfError]], [[maxValue]], [[minValue]]) or from other compatible (e.g. RDF) systems such as DataCommons.org or Wikidata.org. 
 * @property-read SchemaTypeList<Enumeration>                                $measurementQualifier   Provides additional qualification to an observation. For example, a GDP observation measures the Nominal value.
 * @property-read SchemaTypeList<URL|DefinedTerm|MeasurementMethodEnum|Text> $measurementMethod      A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
 * @property-read SchemaTypeList<Class>                                      $populationType         Indicates the populationType common to all members of a [[StatisticalPopulation]] or all cases within the scope of a [[StatisticalVariable]].
 */
interface StatisticalVariable extends ConstraintNode
{
}
