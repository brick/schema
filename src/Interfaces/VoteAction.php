<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:VoteAction
 *
 * @property-read SchemaTypeList<Person> $candidate A sub property of object. The candidate subject of this action.
 */
interface VoteAction extends ChooseAction
{
}
