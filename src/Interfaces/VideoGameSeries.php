<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:VideoGameSeries
 *
 * @property-read SchemaTypeList<Thing>                   $gameItem           An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
 * @property-read SchemaTypeList<CreativeWorkSeason>      $seasons            A season in a media series.
 * @property-read SchemaTypeList<CreativeWork>            $cheatCode          Cheat codes to the game.
 * @property-read SchemaTypeList<Person>                  $director           A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<GamePlayMode>            $playMode           Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
 * @property-read SchemaTypeList<Integer>                 $numberOfSeasons    The number of seasons in this series.
 * @property-read SchemaTypeList<Thing|Text|URL>          $gamePlatform       The electronic systems used to play video games.
 * @property-read SchemaTypeList<Thing>                   $quest              The task that a player-controlled character, or group of characters may complete in order to gain a reward.
 * @property-read SchemaTypeList<Episode>                 $episodes           An episode of a TV/radio series or season.
 * @property-read SchemaTypeList<Episode>                 $episode            An episode of a TV, radio or game media within a series or season.
 * @property-read SchemaTypeList<VideoObject>             $trailer            The trailer of a movie or TV/radio series, season, episode, etc.
 * @property-read SchemaTypeList<Organization>            $productionCompany  The production company or studio responsible for the item, e.g. series, video game, episode etc.
 * @property-read SchemaTypeList<Person>                  $directors          A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<URL|CreativeWorkSeason>  $season             A season in a media series.
 * @property-read SchemaTypeList<Integer>                 $numberOfEpisodes   The number of episodes in this season or series.
 * @property-read SchemaTypeList<CreativeWorkSeason>      $containsSeason     A season that is part of the media series.
 * @property-read SchemaTypeList<QuantitativeValue>       $numberOfPlayers    Indicate how many people can play this game (minimum, maximum, or range).
 * @property-read SchemaTypeList<PostalAddress|Place|URL> $gameLocation       Real or fictional location of the game (or part of game).
 * @property-read SchemaTypeList<Person>                  $actors             An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Person>                  $actor              An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Thing>                   $characterAttribute A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
 * @property-read SchemaTypeList<Person|MusicGroup>       $musicBy            The composer of the soundtrack.
 */
interface VideoGameSeries extends CreativeWorkSeries
{
}
