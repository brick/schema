<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:SportsTeam
 *
 * @property-read SchemaTypeList<Person>          $coach   A person that acts in a coaching role for a sports team.
 * @property-read SchemaTypeList<Person>          $athlete A person that acts as performing member of a sports team; a player as opposed to a coach.
 * @property-read SchemaTypeList<GenderType|Text> $gender  Gender of something, typically a [[Person]], but possibly also fictional characters, animals, etc. While https://schema.org/Male and https://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender. The [[gender]] property can also be used in an extended sense to cover e.g. the gender of sports teams. As with the gender of individuals, we do not try to enumerate all possibilities. A mixed-gender [[SportsTeam]] can be indicated with a text value of "Mixed".
 */
interface SportsTeam extends SportsOrganization
{
}
