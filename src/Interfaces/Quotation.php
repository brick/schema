<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Quotation
 *
 * @property-read SchemaTypeList<Organization|Person> $spokenByCharacter The (e.g. fictional) character, Person or Organization to whom the quotation is attributed within the containing CreativeWork.
 */
interface Quotation extends CreativeWork
{
}
