<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Boolean;

/**
 * schema:3DModel
 *
 * @property-read SchemaTypeList<Boolean> $isResizable Whether the 3DModel allows resizing. For example, room layout applications often do not allow 3DModel elements to be resized to reflect reality.
 */
interface 3DModel extends MediaObject
{
}
