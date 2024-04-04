<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:GovernmentService
 *
 * @property-read SchemaTypeList<Organization>            $serviceOperator The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
 * @property-read SchemaTypeList<AdministrativeArea|Text> $jurisdiction    Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
 */
interface GovernmentService extends Service
{
}
