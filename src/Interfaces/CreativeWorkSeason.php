<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Text;

/**
 * schema:CreativeWorkSeason
 *
 * @property-read SchemaTypeList<Date|DateTime>      $endDate           The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
 * @property-read SchemaTypeList<Person>             $director          A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Episode>            $episodes          An episode of a TV/radio series or season.
 * @property-read SchemaTypeList<Episode>            $episode           An episode of a TV, radio or game media within a series or season.
 * @property-read SchemaTypeList<VideoObject>        $trailer           The trailer of a movie or TV/radio series, season, episode, etc.
 * @property-read SchemaTypeList<Organization>       $productionCompany The production company or studio responsible for the item, e.g. series, video game, episode etc.
 * @property-read SchemaTypeList<CreativeWorkSeries> $partOfSeries      The series to which this episode or season belongs.
 * @property-read SchemaTypeList<Integer>            $numberOfEpisodes  The number of episodes in this season or series.
 * @property-read SchemaTypeList<Text|Integer>       $seasonNumber      Position of the season within an ordered group of seasons.
 * @property-read SchemaTypeList<Date|DateTime>      $startDate         The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
 * @property-read SchemaTypeList<Person>             $actor             An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
 */
interface CreativeWorkSeason extends CreativeWork
{
}
