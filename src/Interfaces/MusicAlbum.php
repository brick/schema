<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MusicAlbum
 *
 * @property-read SchemaTypeList<MusicRelease>             $albumRelease        A release of this album.
 * @property-read SchemaTypeList<MusicAlbumReleaseType>    $albumReleaseType    The kind of release which this album is: single, EP or album.
 * @property-read SchemaTypeList<MusicAlbumProductionType> $albumProductionType Classification of the album by its type of content: soundtrack, live album, studio album, etc.
 * @property-read SchemaTypeList<Person|MusicGroup>        $byArtist            The artist that performed this album or recording.
 */
interface MusicAlbum extends MusicPlaylist
{
}
