<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Boolean;
use Brick\Schema\DataType\Text;

/**
 * schema:DeliveryTimeSettings
 *
 * @property-read SchemaTypeList<Boolean>              $isUnlabelledFallback This can be marked 'true' to indicate that some published [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to all [[OfferShippingDetails]] published by the same merchant, when referenced by a [[shippingSettingsLink]] in those settings. It is not meaningful to use a 'true' value for this property alongside a transitTimeLabel (for [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]), since this property is for use with unlabelled settings.
 * @property-read SchemaTypeList<ShippingDeliveryTime> $deliveryTime         The total delay between the receipt of the order and the goods reaching the final customer.
 * @property-read SchemaTypeList<DefinedRegion>        $shippingDestination  indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
 * @property-read SchemaTypeList<Text>                 $transitTimeLabel     Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
 */
interface DeliveryTimeSettings extends StructuredValue
{
}
