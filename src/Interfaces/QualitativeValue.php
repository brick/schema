<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:QualitativeValue
 *
 * @property-read SchemaTypeList<QualitativeValue>                                                                                                         $lesserOrEqual      This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
 * @property-read SchemaTypeList<PropertyValue>                                                                                                            $additionalProperty A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
 * @property-read SchemaTypeList<QualitativeValue>                                                                                                         $greater            This ordering relation for qualitative values indicates that the subject is greater than the object.
 * @property-read SchemaTypeList<QualitativeValue>                                                                                                         $greaterOrEqual     This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
 * @property-read SchemaTypeList<QualitativeValue>                                                                                                         $lesser             This ordering relation for qualitative values indicates that the subject is lesser than the object.
 * @property-read SchemaTypeList<QualitativeValue|Text|Enumeration|QuantitativeValue|DefinedTerm|MeasurementTypeEnumeration|StructuredValue|PropertyValue> $valueReference     A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
 * @property-read SchemaTypeList<QualitativeValue>                                                                                                         $nonEqual           This ordering relation for qualitative values indicates that the subject is not equal to the object.
 * @property-read SchemaTypeList<QualitativeValue>                                                                                                         $equal              This ordering relation for qualitative values indicates that the subject is equal to the object.
 */
interface QualitativeValue extends Enumeration
{
}
