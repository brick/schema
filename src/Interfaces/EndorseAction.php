<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:EndorseAction
 *
 * @property-read SchemaTypeList<Organization|Person> $endorsee A sub property of participant. The person/organization being supported.
 */
interface EndorseAction extends ReactAction
{
}
