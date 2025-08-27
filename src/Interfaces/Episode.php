<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Episode
 *
 * @property-read SchemaTypeList<Duration>           $duration          The duration of the item (movie, audio recording, event, etc.) in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
 * @property-read SchemaTypeList<Text|Integer>       $episodeNumber     Position of the episode within an ordered group of episodes.
 * @property-read SchemaTypeList<Person>             $director          A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<VideoObject>        $trailer           The trailer of a movie or TV/radio series, season, episode, etc.
 * @property-read SchemaTypeList<Organization>       $productionCompany The production company or studio responsible for the item, e.g. series, video game, episode etc.
 * @property-read SchemaTypeList<Person>             $directors         A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<CreativeWorkSeries> $partOfSeries      The series to which this episode or season belongs.
 * @property-read SchemaTypeList<CreativeWorkSeason> $partOfSeason      The season to which this episode belongs.
 * @property-read SchemaTypeList<Person>             $actors            An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Person>             $actor             An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Person|MusicGroup>  $musicBy           The composer of the soundtrack.
 */
interface Episode extends CreativeWork
{
}
