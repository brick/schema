<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:EngineSpecification
 *
 * @property-read SchemaTypeList<Text|URL|QualitativeValue> $engineType         The type of engine or engines powering the vehicle.
 * @property-read SchemaTypeList<Text|URL|QualitativeValue> $fuelType           The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
 * @property-read SchemaTypeList<QuantitativeValue>         $engineDisplacement The volume swept by all of the pistons inside the cylinders of an internal combustion engine in a single movement. \n\nTypical unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic inches\n* Note 1: You can link to information about how the given value has been determined using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
 * @property-read SchemaTypeList<QuantitativeValue>         $enginePower        The power of the vehicle's engine.
 * @property-read SchemaTypeList<QuantitativeValue>         $torque             The torque (turning force) of the vehicle's engine.\n\nTypical unit code(s): NU for newton metre (N m), F17 for pound-force per foot, or F48 for pound-force per inch\n\n* Note 1: You can link to information about how the given value has been determined (e.g. reference RPM) using the [[valueReference]] property.\n* Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
 */
interface EngineSpecification extends StructuredValue
{
}
