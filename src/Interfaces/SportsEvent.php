<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:SportsEvent
 *
 * @property-read SchemaTypeList<Person|SportsTeam> $awayTeam   The away team in a sports event.
 * @property-read SchemaTypeList<Text|URL>          $sport      A type of sport (e.g. Baseball).
 * @property-read SchemaTypeList<Person|SportsTeam> $competitor A competitor in a sports event.
 * @property-read SchemaTypeList<Person|SportsTeam> $homeTeam   The home team in a sports event.
 */
interface SportsEvent extends Event
{
}
