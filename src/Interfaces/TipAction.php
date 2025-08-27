<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:TipAction
 *
 * @property-read SchemaTypeList<Organization|Audience|Person|ContactPoint> $recipient A sub property of participant. The participant who is at the receiving end of the action.
 */
interface TipAction extends TradeAction
{
}
