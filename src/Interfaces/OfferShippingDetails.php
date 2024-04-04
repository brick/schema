<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Boolean;

/**
 * schema:OfferShippingDetails
 *
 * @property-read SchemaTypeList<QuantitativeValue|Distance> $width                The width of the item.
 * @property-read SchemaTypeList<Text>                       $shippingLabel        Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
 * @property-read SchemaTypeList<MonetaryAmount>             $shippingRate         The shipping rate is the cost of shipping to the specified destination. Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are most appropriate.
 * @property-read SchemaTypeList<URL>                        $shippingSettingsLink Link to a page containing [[ShippingRateSettings]] and [[DeliveryTimeSettings]] details.
 * @property-read SchemaTypeList<QuantitativeValue|Distance> $height               The height of the item.
 * @property-read SchemaTypeList<DefinedRegion>              $shippingOrigin       Indicates the origin of a shipment, i.e. where it should be coming from.
 * @property-read SchemaTypeList<Boolean>                    $doesNotShip          Indicates when shipping to a particular [[shippingDestination]] is not available.
 * @property-read SchemaTypeList<ShippingDeliveryTime>       $deliveryTime         The total delay between the receipt of the order and the goods reaching the final customer.
 * @property-read SchemaTypeList<QuantitativeValue>          $weight               The weight of the product or person.
 * @property-read SchemaTypeList<QuantitativeValue|Distance> $depth                The depth of the item.
 * @property-read SchemaTypeList<DefinedRegion>              $shippingDestination  indicates (possibly multiple) shipping destinations. These can be defined in several ways, e.g. postalCode ranges.
 * @property-read SchemaTypeList<Text>                       $transitTimeLabel     Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]] (within the context of a [[shippingSettingsLink]] cross-reference).
 */
interface OfferShippingDetails extends StructuredValue
{
}
