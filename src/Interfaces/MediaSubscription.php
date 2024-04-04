<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:MediaSubscription
 *
 * @property-read SchemaTypeList<Offer>        $expectsAcceptanceOf An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
 * @property-read SchemaTypeList<Organization> $authenticator       The Organization responsible for authenticating the user's subscription. For example, many media apps require a cable/satellite provider to authenticate your subscription before playing media.
 */
interface MediaSubscription extends Intangible
{
}
