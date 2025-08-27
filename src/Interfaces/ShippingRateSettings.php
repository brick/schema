<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Boolean;

/**
 * schema:ShippingRateSettings
 *
 * @property-read SchemaTypeList<Text>                                       $shippingLabel         Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
 * @property-read SchemaTypeList<MonetaryAmount>                             $shippingRate          The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are most appropriate.
 * @property-read SchemaTypeList<Boolean>                                    $isUnlabelledFallback  This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
 * @property-read SchemaTypeList<Boolean>                                    $doesNotShip           Indicates when shipping to a particular [[shippingDestination]] is not available.
 * @property-read SchemaTypeList<MonetaryAmount|DeliveryChargeSpecification> $freeShippingThreshold A monetary value above (or at) which the shipping rate becomes free. Intended to be used via an [[OfferShippingDetails]] with [[shippingSettingsLink]] matching this [[ShippingRateSettings]].
 * @property-read SchemaTypeList<DefinedRegion>                              $shippingDestination   indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
 */
interface ShippingRateSettings extends StructuredValue
{
}
