<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Boolean;

/**
 * schema:PropertyValue
 *
 * @property-read SchemaTypeList<Number>                                                                                                                   $minValue             The lower value of some characteristic or property.
 * @property-read SchemaTypeList<Text|URL>                                                                                                                 $propertyID           A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property. propertyID can be
 * @property-read SchemaTypeList<DefinedTerm|MeasurementMethodEnum|Text|URL>                                                                               $measurementTechnique A technique, method or technology used in an [[Observation]], [[StatisticalVariable]] or [[Dataset]] (or [[DataDownload]], [[DataCatalog]]), corresponding to the method used for measuring the corresponding variable(s) (for datasets, described using [[variableMeasured]]; for [[Observation]], a [[StatisticalVariable]]). Often but not necessarily each [[variableMeasured]] will have an explicit representation as (or mapping to) an property such as those defined in Schema.org, or other RDF vocabularies and "knowledge graphs". In that case the subproperty of [[variableMeasured]] called [[measuredProperty]] is applicable.
 * @property-read SchemaTypeList<Text>                                                                                                                     $unitText             A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
 * @property-read SchemaTypeList<Text|URL>                                                                                                                 $unitCode             The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
 * @property-read SchemaTypeList<QualitativeValue|Text|Enumeration|QuantitativeValue|DefinedTerm|MeasurementTypeEnumeration|StructuredValue|PropertyValue> $valueReference       A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
 * @property-read SchemaTypeList<Number>                                                                                                                   $maxValue             The upper value of some characteristic or property.
 * @property-read SchemaTypeList<URL|DefinedTerm|MeasurementMethodEnum|Text>                                                                               $measurementMethod    A subproperty of [[measurementTechnique]] that can be used for specifying specific methods, in particular via [[MeasurementMethodEnum]].
 * @property-read SchemaTypeList<StructuredValue|Number|Text|Boolean>                                                                                      $value                The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
 */
interface PropertyValue extends StructuredValue
{
}
