<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:HyperTocEntry
 *
 * @property-read SchemaTypeList<MediaObject>   $associatedMedia A media object that encodes this CreativeWork. This property is a synonym for encoding.
 * @property-read SchemaTypeList<HyperTocEntry> $tocContinuation A [[HyperTocEntry]] can have a [[tocContinuation]] indicated, which is another [[HyperTocEntry]] that would be the default next item to play or render.
 * @property-read SchemaTypeList<Text>          $utterances      Text of an utterances (spoken words, lyrics etc.) that occurs at a certain section of a media object, represented as a [[HyperTocEntry]].
 */
interface HyperTocEntry extends CreativeWork
{
}
