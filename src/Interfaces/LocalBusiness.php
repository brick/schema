<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:LocalBusiness
 *
 * @property-read SchemaTypeList<Text>         $priceRange         The price range of the business, for example ```$$$```.
 * @property-read SchemaTypeList<Text>         $paymentAccepted    Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
 * @property-read SchemaTypeList<Organization> $branchOf           The larger organization that this local business is a branch of, if any. Not to be confused with (anatomical) [[branch]].
 * @property-read SchemaTypeList<Text>         $openingHours       The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.\n\n* Days are specified using the following two-letter combinations: ```Mo```, ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.\n* Times are specified using 24:00 format. For example, 3pm is specified as ```15:00```, 10am as ```10:00```. \n* Here is an example: <time itemprop="openingHours" datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>.\n* If a business is open 7 days a week, then it can be specified as <time itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all day</time>.
 * @property-read SchemaTypeList<Text>         $currenciesAccepted The currency accepted.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
 */
interface LocalBusiness extends Organization, Place
{
}
