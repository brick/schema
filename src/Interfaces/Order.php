<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Boolean;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Number;

/**
 * schema:Order
 *
 * @property-read SchemaTypeList<OrderStatus>               $orderStatus        The current status of the order.
 * @property-read SchemaTypeList<URL>                       $paymentUrl         The URL for sending a payment.
 * @property-read SchemaTypeList<Person|Organization>       $merchant           'merchant' is an out-dated term for 'seller'.
 * @property-read SchemaTypeList<Text>                      $paymentMethodId    An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
 * @property-read SchemaTypeList<Boolean>                   $isGift             Indicates whether the offer was accepted as a gift for someone other than the buyer.
 * @property-read SchemaTypeList<PostalAddress>             $billingAddress     The billing address for the order.
 * @property-read SchemaTypeList<Person|Organization>       $broker             An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
 * @property-read SchemaTypeList<Text>                      $discountCurrency   The currency of the discount.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
 * @property-read SchemaTypeList<Product|OrderItem|Service> $orderedItem        The item ordered.
 * @property-read SchemaTypeList<Text>                      $orderNumber        The identifier of the transaction.
 * @property-read SchemaTypeList<Organization|Person>       $customer           Party placing the order or paying the invoice.
 * @property-read SchemaTypeList<Offer>                     $acceptedOffer      The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
 * @property-read SchemaTypeList<Text>                      $discountCode       Code used to redeem a discount.
 * @property-read SchemaTypeList<Date|DateTime>             $orderDate          Date order was placed.
 * @property-read SchemaTypeList<DateTime>                  $paymentDue         The date that payment is due.
 * @property-read SchemaTypeList<ParcelDelivery>            $orderDelivery      The delivery of the parcel related to this order or order item.
 * @property-read SchemaTypeList<Text>                      $confirmationNumber A number that confirms the given order or payment has been received.
 * @property-read SchemaTypeList<Number|Text>               $discount           Any discount applied (to an Order).
 * @property-read SchemaTypeList<PaymentMethod>             $paymentMethod      The name of the credit card or other method of payment for the order.
 * @property-read SchemaTypeList<Person|Organization>       $seller             An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
 * @property-read SchemaTypeList<Date|DateTime>             $paymentDueDate     The date that payment is due.
 * @property-read SchemaTypeList<Invoice>                   $partOfInvoice      The order is being paid as part of the referenced Invoice.
 */
interface Order extends Intangible
{
}
