<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Text;

/**
 * schema:UnitPriceSpecification
 *
 * @property-read SchemaTypeList<PriceComponentTypeEnumeration>     $priceComponentType Identifies a price component (for example, a line item on an invoice), part of the total price for an offer.
 * @property-read SchemaTypeList<Number>                            $billingIncrement   This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement is specified by the unitCode property.
 * @property-read SchemaTypeList<Text>                              $unitText           A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
 * @property-read SchemaTypeList<PriceTypeEnumeration|Text>         $priceType          Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
 * @property-read SchemaTypeList<Text|URL>                          $unitCode           The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
 * @property-read SchemaTypeList<Duration|Number|QuantitativeValue> $billingDuration    Specifies for how long this price (or price component) will be billed. Can be used, for example, to model the contractual duration of a subscription or payment plan. Type can be either a Duration or a Number (in which case the unit of measurement, for example month, is specified by the unitCode property).
 * @property-read SchemaTypeList<Number>                            $billingStart       Specifies after how much time this price (or price component) becomes valid and billing starts. Can be used, for example, to model a price increase after the first year of a subscription. The unit of measurement is specified by the unitCode property.
 * @property-read SchemaTypeList<QuantitativeValue>                 $referenceQuantity  The reference quantity for which a certain price applies, e.g. 1 EUR per 4 kWh of electricity. This property is a replacement for unitOfMeasurement for the advanced cases where the price does not relate to a standard unit.
 */
interface UnitPriceSpecification extends PriceSpecification
{
}
