<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:WebAPI
 *
 * @property-read SchemaTypeList<URL|CreativeWork> $documentation Further documentation describing the Web API in more detail.
 */
interface WebAPI extends Service
{
}
