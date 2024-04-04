<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;

/**
 * schema:Ticket
 *
 * @property-read SchemaTypeList<Organization|Person>            $underName     The person or organization the reservation or ticket is for.
 * @property-read SchemaTypeList<Text>                           $ticketNumber  The unique identifier for the ticket.
 * @property-read SchemaTypeList<PriceSpecification|Text|Number> $totalPrice    The total price for the reservation or ticket, including applicable taxes, shipping, etc.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
 * @property-read SchemaTypeList<Text>                           $priceCurrency The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
 * @property-read SchemaTypeList<Organization>                   $issuedBy      The organization issuing the item, for example a [[Permit]], [[Ticket]], or [[Certification]].
 * @property-read SchemaTypeList<Date|DateTime>                  $dateIssued    The date the ticket was issued.
 * @property-read SchemaTypeList<Seat>                           $ticketedSeat  The seat associated with the ticket.
 * @property-read SchemaTypeList<Text|URL>                       $ticketToken   Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
 */
interface Ticket extends Intangible
{
}
