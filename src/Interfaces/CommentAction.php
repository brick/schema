<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:CommentAction
 *
 * @property-read SchemaTypeList<Comment> $resultComment A sub property of result. The Comment created or sent as a result of this action.
 */
interface CommentAction extends CommunicateAction
{
}
