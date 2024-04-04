<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;

/**
 * schema:RsvpAction
 *
 * @property-read SchemaTypeList<Number>           $additionalNumberOfGuests If responding yes, the number of guests who will attend in addition to the invitee.
 * @property-read SchemaTypeList<RsvpResponseType> $rsvpResponse             The response (yes, no, maybe) to the RSVP.
 * @property-read SchemaTypeList<Comment>          $comment                  Comments, typically from users.
 */
interface RsvpAction extends InformAction
{
}
