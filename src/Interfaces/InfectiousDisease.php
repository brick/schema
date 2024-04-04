<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:InfectiousDisease
 *
 * @property-read SchemaTypeList<Text>                 $infectiousAgent      The actual infectious agent, such as a specific bacterium.
 * @property-read SchemaTypeList<InfectiousAgentClass> $infectiousAgentClass The class of infectious agent (bacteria, prion, etc.) that causes the disease.
 * @property-read SchemaTypeList<Text>                 $transmissionMethod   How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
 */
interface InfectiousDisease extends MedicalCondition
{
}
