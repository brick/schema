<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Text;

/**
 * schema:UserComments
 *
 * @property-read SchemaTypeList<Organization|Person> $creator     The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
 * @property-read SchemaTypeList<Date|DateTime>       $commentTime The time at which the UserComment was made.
 * @property-read SchemaTypeList<Text>                $commentText The text of the UserComment.
 * @property-read SchemaTypeList<URL>                 $replyToUrl  The URL at which a reply may be posted to the specified UserComment.
 * @property-read SchemaTypeList<CreativeWork>        $discusses   Specifies the CreativeWork associated with the UserComment.
 */
interface UserComments extends UserInteraction
{
}
