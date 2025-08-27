<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;

/**
 * schema:Clip
 *
 * @property-read SchemaTypeList<Number|HyperTocEntry> $startOffset   The start time of the clip expressed as the number of seconds from the beginning of the work.
 * @property-read SchemaTypeList<Person>               $director      A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Person>               $directors     A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Text|Integer>         $clipNumber    Position of the clip within an ordered group of clips.
 * @property-read SchemaTypeList<CreativeWorkSeries>   $partOfSeries  The series to which this episode or season belongs.
 * @property-read SchemaTypeList<CreativeWorkSeason>   $partOfSeason  The season to which this episode belongs.
 * @property-read SchemaTypeList<HyperTocEntry|Number> $endOffset     The end time of the clip expressed as the number of seconds from the beginning of the work.
 * @property-read SchemaTypeList<Person>               $actors        An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Episode>              $partOfEpisode The episode to which this clip belongs.
 * @property-read SchemaTypeList<Person>               $actor         An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
 * @property-read SchemaTypeList<Person|MusicGroup>    $musicBy       The composer of the soundtrack.
 */
interface Clip extends CreativeWork
{
}
