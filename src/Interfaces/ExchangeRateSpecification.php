<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:ExchangeRateSpecification
 *
 * @property-read SchemaTypeList<Text>                   $currency            The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
 * @property-read SchemaTypeList<UnitPriceSpecification> $currentExchangeRate The current price of a currency.
 * @property-read SchemaTypeList<MonetaryAmount|Number>  $exchangeRateSpread  The difference between the price at which a broker or other intermediary buys and sells foreign currency.
 */
interface ExchangeRateSpecification extends StructuredValue
{
}
