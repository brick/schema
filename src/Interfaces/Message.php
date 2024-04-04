<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Date;

/**
 * schema:Message
 *
 * @property-read SchemaTypeList<Organization|Person|ContactPoint>          $bccRecipient      A sub property of recipient. The recipient blind copied on a message.
 * @property-read SchemaTypeList<Organization|Audience|Person>              $sender            A sub property of participant. The participant who is at the sending end of the action.
 * @property-read SchemaTypeList<Organization|Audience|Person|ContactPoint> $toRecipient       A sub property of recipient. The recipient who was directly sent the message.
 * @property-read SchemaTypeList<DateTime>                                  $dateReceived      The date/time the message was received if a single recipient exists.
 * @property-read SchemaTypeList<Date|DateTime>                             $dateRead          The date/time at which the message has been read by the recipient if a single recipient exists.
 * @property-read SchemaTypeList<DateTime>                                  $dateSent          The date/time at which the message was sent.
 * @property-read SchemaTypeList<CreativeWork>                              $messageAttachment A CreativeWork attached to the message.
 * @property-read SchemaTypeList<Organization|Audience|Person|ContactPoint> $recipient         A sub property of participant. The participant who is at the receiving end of the action.
 * @property-read SchemaTypeList<Organization|Person|ContactPoint>          $ccRecipient       A sub property of recipient. The recipient copied on a message.
 */
interface Message extends CreativeWork
{
}
