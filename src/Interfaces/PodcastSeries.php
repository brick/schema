<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:PodcastSeries
 *
 * @property-read SchemaTypeList<DataFeed|URL> $webFeed The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
 * @property-read SchemaTypeList<Person>       $actor   An actor, e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
 */
interface PodcastSeries extends CreativeWorkSeries
{
}
