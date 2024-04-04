<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Claim
 *
 * @property-read SchemaTypeList<CreativeWork>        $firstAppearance  Indicates the first known occurrence of a [[Claim]] in some [[CreativeWork]].
 * @property-read SchemaTypeList<CreativeWork>        $appearance       Indicates an occurrence of a [[Claim]] in some [[CreativeWork]].
 * @property-read SchemaTypeList<Person|Organization> $claimInterpreter For a [[Claim]] interpreted from [[MediaObject]] content
 */
interface Claim extends CreativeWork
{
}
