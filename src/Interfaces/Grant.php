<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Grant
 *
 * @property-read SchemaTypeList<Organization|Person>                                                        $sponsor    A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
 * @property-read SchemaTypeList<Organization|Person>                                                        $funder     A person or organization that supports (sponsors) something through some kind of financial contribution.
 * @property-read SchemaTypeList<BioChemEntity|Person|CreativeWork|Event|MedicalEntity|Organization|Product> $fundedItem Indicates something directly or indirectly funded or sponsored through a [[Grant]]. See also [[ownershipFundingInfo]].
 */
interface Grant extends Intangible
{
}
