<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:ChooseAction
 *
 * @property-read SchemaTypeList<Thing|Text> $actionOption A sub property of object. The options subject to this action.
 * @property-read SchemaTypeList<Text|Thing> $option       A sub property of object. The options subject to this action.
 */
interface ChooseAction extends AssessAction
{
}
