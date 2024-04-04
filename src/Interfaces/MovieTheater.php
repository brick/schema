<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;

/**
 * schema:MovieTheater
 *
 * @property-read SchemaTypeList<Number> $screenCount The number of screens in the movie theater.
 */
interface MovieTheater extends EntertainmentBusiness, CivicStructure
{
}
