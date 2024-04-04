<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Text;

/**
 * schema:Observation
 *
 * @property-read SchemaTypeList<StatisticalVariable>                             $measurementDenominator Identifies the denominator variable when an observation represents a ratio or percentage.
 * @property-read SchemaTypeList<DateTime>                                        $observationDate        The observationDate of an [[Observation]].
 * @property-read SchemaTypeList<Property>                                        $measuredProperty       The measuredProperty of an [[Observation]], typically via its [[StatisticalVariable]]. There are various kinds of applicable [[Property]]: a schema.org property, a property from other RDF-compatible systems, e.g. W3C RDF Data Cube, Data Commons, Wikidata, or schema.org extensions such as [GS1's](https://www.gs1.org/voc/?show=properties).
 * @property-read SchemaTypeList<Text>                                            $observationPeriod      The length of time an Observation took place over. The format follows `P[0-9]*[Y|M|D|h|m|s]`. For example, P1Y is Period 1 Year, P3M is Period 3 Months, P3h is Period 3 hours.
 * @property-read SchemaTypeList<DefinedTerm|MeasurementMethodEnum|Text|URL>      $measurementTechnique   A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable.
 * @property-read SchemaTypeList<Enumeration>                                     $measurementQualifier   Provides additional qualification to an observation. For example, a GDP observation measures the Nominal value.
 * @property-read SchemaTypeList<QuantitativeValue>                               $marginOfError          A [[marginOfError]] for an [[Observation]].
 * @property-read SchemaTypeList<Text|Property|StatisticalVariable|PropertyValue> $variableMeasured       The variableMeasured property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue, or more explicitly as a [[StatisticalVariable]].
 * @property-read SchemaTypeList<Thing|Place>                                     $observationAbout       The [[observationAbout]] property identifies an entity, often a [[Place]], associated with an [[Observation]].
 * @property-read SchemaTypeList<URL|DefinedTerm|MeasurementMethodEnum|Text>      $measurementMethod      A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
 */
interface Observation extends QuantitativeValue, Intangible
{
}
