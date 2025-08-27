<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:Reservation
 *
 * @property-read SchemaTypeList<DateTime>                       $bookingTime           The date and time the reservation was booked.
 * @property-read SchemaTypeList<Organization|Person>            $underName             The person or organization the reservation or ticket is for.
 * @property-read SchemaTypeList<PriceSpecification|Text|Number> $totalPrice            The total price for the reservation or ticket, including applicable taxes, shipping, etc.\n\nUsage guidelines:\n\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
 * @property-read SchemaTypeList<Text>                           $priceCurrency         The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
 * @property-read SchemaTypeList<DateTime>                       $modifiedTime          The date and time the reservation was modified.
 * @property-read SchemaTypeList<Person|Organization>            $broker                An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
 * @property-read SchemaTypeList<ReservationStatusType>          $reservationStatus     The current status of the reservation.
 * @property-read SchemaTypeList<Text>                           $reservationId         A unique identifier for the reservation.
 * @property-read SchemaTypeList<Ticket>                         $reservedTicket        A ticket associated with the reservation.
 * @property-read SchemaTypeList<Person|Organization>            $bookingAgent          'bookingAgent' is an out-dated term indicating a 'broker' that serves as a booking agent.
 * @property-read SchemaTypeList<ProgramMembership>              $programMembershipUsed Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
 * @property-read SchemaTypeList<Thing>                          $reservationFor        The thing -- flight, event, restaurant, etc. being reserved.
 * @property-read SchemaTypeList<Person|Organization>            $provider              The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
 */
interface Reservation extends Intangible
{
}
