<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Boolean;

/**
 * schema:MonetaryAmount
 *
 * @property-read SchemaTypeList<Number>                              $minValue     The lower value of some characteristic or property.
 * @property-read SchemaTypeList<Text>                                $currency     The currency in which the monetary amount is expressed.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
 * @property-read SchemaTypeList<Date|DateTime>                       $validFrom    The date when the item becomes valid.
 * @property-read SchemaTypeList<Number>                              $maxValue     The upper value of some characteristic or property.
 * @property-read SchemaTypeList<Date|DateTime>                       $validThrough The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
 * @property-read SchemaTypeList<StructuredValue|Number|Text|Boolean> $value        The value of a [[QuantitativeValue]] (including [[Observation]]) or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is 'Number'.\n* For [[PropertyValue]], it can be 'Text', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
 */
interface MonetaryAmount extends StructuredValue
{
}
