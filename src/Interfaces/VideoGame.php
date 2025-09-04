<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\DataType\Text;
use Brick\Schema\SchemaTypeList;

/**
 * http://schema.org/VideoGame
 *
 * @property-read SchemaTypeList<Text|Thing|URL>    $gamePlatform The electronic systems used to play video games.
 * @property-read SchemaTypeList<GameServer>        $gameServer   The server on which  it is possible to play the game.
 * @property-read SchemaTypeList<Person>            $actor        An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<VideoObject>       $trailer      The trailer of a movie or tv/radio series, season, episode, etc.
 * @property-read SchemaTypeList<CreativeWork>      $cheatCode    Cheat codes to the game.
 * @property-read SchemaTypeList<CreativeWork>      $gameTip      Links to tips, tactics, etc.
 * @property-read SchemaTypeList<MusicGroup|Person> $musicBy      The composer of the soundtrack.
 * @property-read SchemaTypeList<Person>            $directors    A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<GamePlayMode>      $playMode     Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
 * @property-read SchemaTypeList<Person>            $director     A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Person>            $actors       An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
 */
interface VideoGame extends SoftwareApplication, Game
{
}
