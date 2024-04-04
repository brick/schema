<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MusicPlaylist
 *
 * @property-read SchemaTypeList<Integer>                 $numTracks The number of tracks in this album or playlist.
 * @property-read SchemaTypeList<MusicRecording>          $tracks    A music recording (track)—usually a single song.
 * @property-read SchemaTypeList<ItemList|MusicRecording> $track     A music recording (track)—usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
 */
interface MusicPlaylist extends CreativeWork
{
}
