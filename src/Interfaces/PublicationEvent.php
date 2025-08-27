<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Boolean;

/**
 * schema:PublicationEvent
 *
 * @property-read SchemaTypeList<Organization|Person> $publishedBy An agent associated with the publication event.
 * @property-read SchemaTypeList<Boolean>             $free        A flag to signal that the item, event, or place is accessible for free.
 * @property-read SchemaTypeList<BroadcastService>    $publishedOn A broadcast service associated with the publication event.
 */
interface PublicationEvent extends Event
{
}
