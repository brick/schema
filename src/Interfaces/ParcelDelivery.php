<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;

/**
 * schema:ParcelDelivery
 *
 * @property-read SchemaTypeList<Product>             $itemShipped          Item(s) being shipped.
 * @property-read SchemaTypeList<DeliveryEvent>       $deliveryStatus       New entry added as the package passes through each leg of its journey (from shipment to final delivery).
 * @property-read SchemaTypeList<PostalAddress>       $originAddress        Shipper's address.
 * @property-read SchemaTypeList<PostalAddress>       $deliveryAddress      Destination address.
 * @property-read SchemaTypeList<URL>                 $trackingUrl          Tracking url for the parcel delivery.
 * @property-read SchemaTypeList<DeliveryMethod>      $hasDeliveryMethod    Method used for delivery or shipping.
 * @property-read SchemaTypeList<Text>                $trackingNumber       Shipper tracking number.
 * @property-read SchemaTypeList<Order>               $partOfOrder          The overall order the items in this delivery were included in.
 * @property-read SchemaTypeList<Person|Organization> $provider             The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
 * @property-read SchemaTypeList<Organization>        $carrier              'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
 * @property-read SchemaTypeList<Date|DateTime>       $expectedArrivalUntil The latest date the package may arrive.
 * @property-read SchemaTypeList<Date|DateTime>       $expectedArrivalFrom  The earliest date the package may arrive.
 */
interface ParcelDelivery extends Intangible
{
}
