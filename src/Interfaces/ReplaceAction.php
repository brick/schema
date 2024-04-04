<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:ReplaceAction
 *
 * @property-read SchemaTypeList<Thing> $replacer A sub property of object. The object that replaces.
 * @property-read SchemaTypeList<Thing> $replacee A sub property of object. The object that is being replaced.
 */
interface ReplaceAction extends UpdateAction
{
}
