<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:ComicStory
 *
 * @property-read SchemaTypeList<Person> $inker    The individual who traces over the pencil drawings in ink after pencils are complete.
 * @property-read SchemaTypeList<Person> $penciler The individual who draws the primary narrative artwork.
 * @property-read SchemaTypeList<Person> $letterer The individual who adds lettering, including speech balloons and sound effects, to artwork.
 * @property-read SchemaTypeList<Person> $artist   The primary artist for a work
 * @property-read SchemaTypeList<Person> $colorist The individual who adds color to inked drawings.
 */
interface ComicStory extends CreativeWork
{
}
