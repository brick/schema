<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MusicRelease
 *
 * @property-read SchemaTypeList<Duration>               $duration           The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<MusicAlbum>             $releaseOf          The album this is a release of.
 * @property-read SchemaTypeList<MusicReleaseFormatType> $musicReleaseFormat Format of this release (the type of recording media used, i.e. compact disc, digital media, LP, etc.).
 * @property-read SchemaTypeList<Organization|Person>    $creditedTo         The group the release is credited to if different than the byArtist. For example, Red and Blue is credited to "Stefani Germanotta Band", but by Lady Gaga.
 * @property-read SchemaTypeList<Organization>           $recordLabel        The label that issued the release.
 * @property-read SchemaTypeList<Text>                   $catalogNumber      The catalog number for the release.
 */
interface MusicRelease extends MusicPlaylist
{
}
