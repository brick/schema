<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MusicGroup
 *
 * @property-read SchemaTypeList<URL|Text>                $genre            Genre of the creative work, broadcast channel or group.
 * @property-read SchemaTypeList<MusicAlbum>              $albums           A collection of music albums.
 * @property-read SchemaTypeList<MusicAlbum>              $album            A music album.
 * @property-read SchemaTypeList<MusicRecording>          $tracks           A music recording (track)—usually a single song.
 * @property-read SchemaTypeList<ItemList|MusicRecording> $track            A music recording (track)—usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
 * @property-read SchemaTypeList<Person>                  $musicGroupMember A member of a music group—for example, John, Paul, George, or Ringo.
 */
interface MusicGroup extends PerformingGroup
{
}
