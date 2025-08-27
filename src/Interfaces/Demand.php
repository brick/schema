<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Time;

/**
 * schema:Demand
 *
 * @property-read SchemaTypeList<GeoShape|Text|Place>                                             $eligibleRegion            The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]].
 * @property-read SchemaTypeList<Text>                                                            $gtin14                    The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
 * @property-read SchemaTypeList<Date|DateTime|Time>                                              $availabilityStarts        The beginning of the availability of the product or service included in the offer.
 * @property-read SchemaTypeList<WarrantyPromise>                                                 $warranty                  The warranty promise(s) included in the offer.
 * @property-read SchemaTypeList<QuantitativeValue>                                               $eligibleQuantity          The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
 * @property-read SchemaTypeList<QuantitativeValue>                                               $deliveryLeadTime          The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
 * @property-read SchemaTypeList<QuantitativeValue>                                               $advanceBookingRequirement The amount of time that is required between accepting the offer and the actual usage of the resource or service.
 * @property-read SchemaTypeList<Place>                                                           $availableAtOrFrom         The place(s) from which the offer can be obtained (e.g. store locations).
 * @property-read SchemaTypeList<OfferItemCondition>                                              $itemCondition             A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.
 * @property-read SchemaTypeList<Text>                                                            $gtin12                    The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
 * @property-read SchemaTypeList<PriceSpecification>                                              $eligibleTransactionVolume The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
 * @property-read SchemaTypeList<Text|Place|AdministrativeArea|GeoShape>                          $areaServed                The geographic area where a service or offered item is provided.
 * @property-read SchemaTypeList<Text>                                                            $serialNumber              The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
 * @property-read SchemaTypeList<TypeAndQuantityNode>                                             $includesObject            This links to a node or nodes indicating the exact quantity of the products included in  an [[Offer]] or [[ProductCollection]].
 * @property-read SchemaTypeList<Time|Date|DateTime>                                              $availabilityEnds          The end of the availability of the product or service included in the offer.
 * @property-read SchemaTypeList<Date|DateTime>                                                   $validFrom                 The date when the item becomes valid.
 * @property-read SchemaTypeList<CreativeWork|Trip|MenuItem|Event|Product|AggregateOffer|Service> $itemOffered               An item being offered (or demanded). The transactional nature of the offer or demand is documented using [[businessFunction]], e.g. sell, lease etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
 * @property-read SchemaTypeList<Text>                                                            $mpn                       The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
 * @property-read SchemaTypeList<LoanOrCredit|PaymentMethod>                                      $acceptedPaymentMethod     The payment method(s) accepted by seller for this offer.
 * @property-read SchemaTypeList<PriceSpecification>                                              $priceSpecification        One or more detailed price specifications, indicating the unit price and delivery or payment charges.
 * @property-read SchemaTypeList<Date|DateTime>                                                   $validThrough              The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
 * @property-read SchemaTypeList<Text|URL>                                                        $gtin                      A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes.
 * @property-read SchemaTypeList<Text>                                                            $gtin13                    The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
 * @property-read SchemaTypeList<Person|Organization>                                             $seller                    An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
 * @property-read SchemaTypeList<Text|Place|GeoShape>                                             $ineligibleRegion          The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]].
 * @property-read SchemaTypeList<Text>                                                            $sku                       The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
 * @property-read SchemaTypeList<BusinessFunction>                                                $businessFunction          The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
 * @property-read SchemaTypeList<DeliveryMethod>                                                  $availableDeliveryMethod   The delivery method(s) available for this offer.
 * @property-read SchemaTypeList<QuantitativeValue>                                               $eligibleDuration          The duration for which the given offer is valid.
 * @property-read SchemaTypeList<Text>                                                            $gtin8                     The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
 * @property-read SchemaTypeList<ItemAvailability>                                                $availability              The availability of this item—for example In stock, Out of stock, Pre-order, etc.
 * @property-read SchemaTypeList<BusinessEntityType>                                              $eligibleCustomerType      The type(s) of customers for which the given offer is valid.
 * @property-read SchemaTypeList<URL|Text>                                                        $asin                      An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article).
 * @property-read SchemaTypeList<QuantitativeValue>                                               $inventoryLevel            The current approximate inventory level for the item or items.
 */
interface Demand extends Intangible
{
}
