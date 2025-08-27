<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:ArchiveOrganization
 *
 * @property-read SchemaTypeList<ArchiveComponent> $archiveHeld Collection, [fonds](https://en.wikipedia.org/wiki/Fonds), or item held, kept or maintained by an [[ArchiveOrganization]].
 */
interface ArchiveOrganization extends LocalBusiness
{
}
