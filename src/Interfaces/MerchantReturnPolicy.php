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
 * schema:MerchantReturnPolicy
 *
 * @property-read SchemaTypeList<MerchantReturnEnumeration>            $returnPolicyCategory                    Specifies an applicable return policy (from an enumeration).
 * @property-read SchemaTypeList<MonetaryAmount>                       $itemDefectReturnShippingFeesAmount      Amount of shipping costs for defect product returns. Applicable when property [[itemDefectReturnFees]] equals [[ReturnShippingFees]].
 * @property-read SchemaTypeList<OfferItemCondition>                   $itemCondition                           A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.
 * @property-read SchemaTypeList<ReturnFeesEnumeration>                $itemDefectReturnFees                    The type of return fees for returns of defect products.
 * @property-read SchemaTypeList<PropertyValue>                        $additionalProperty                      A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
 * @property-read SchemaTypeList<ReturnFeesEnumeration>                $returnFees                              The type of return fees for purchased products (for any return reason).
 * @property-read SchemaTypeList<MonetaryAmount|Number>                $restockingFee                           Use [[MonetaryAmount]] to specify a fixed restocking fee for product returns, or use [[Number]] to specify a percentage of the product price paid by the customer.
 * @property-read SchemaTypeList<MonetaryAmount>                       $returnShippingFeesAmount                Amount of shipping costs for product returns (for any reason). Applicable when property [[returnFees]] equals [[ReturnShippingFees]].
 * @property-read SchemaTypeList<ReturnLabelSourceEnumeration>         $customerRemorseReturnLabelSource        The method (from an enumeration) by which the customer obtains a return shipping label for a product returned due to customer remorse.
 * @property-read SchemaTypeList<MonetaryAmount>                       $customerRemorseReturnShippingFeesAmount The amount of shipping costs if a product is returned due to customer remorse. Applicable when property [[customerRemorseReturnFees]] equals [[ReturnShippingFees]].
 * @property-read SchemaTypeList<ReturnFeesEnumeration>                $customerRemorseReturnFees               The type of return fees if the product is returned due to customer remorse.
 * @property-read SchemaTypeList<Text|Country>                         $returnPolicyCountry                     The country where the product has to be sent to for returns, for example "Ireland" using the [[name]] property of [[Country]]. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1). Note that this can be different from the country where the product was originally shipped from or sent to.
 * @property-read SchemaTypeList<ReturnMethodEnumeration>              $returnMethod                            The type of return method offered, specified from an enumeration.
 * @property-read SchemaTypeList<RefundTypeEnumeration>                $refundType                              A refund type, from an enumerated list.
 * @property-read SchemaTypeList<MerchantReturnPolicySeasonalOverride> $returnPolicySeasonalOverride            Seasonal override of a return policy.
 * @property-read SchemaTypeList<ReturnLabelSourceEnumeration>         $returnLabelSource                       The method (from an enumeration) by which the customer obtains a return shipping label for a product returned for any reason.
 * @property-read SchemaTypeList<Integer|Date|DateTime>                $merchantReturnDays                      Specifies either a fixed return date or the number of days (from the delivery date) that a product can be returned. Used when the [[returnPolicyCategory]] property is specified as [[MerchantReturnFiniteReturnWindow]].
 * @property-read SchemaTypeList<URL>                                  $merchantReturnLink                      Specifies a Web page or service by URL, for product returns.
 * @property-read SchemaTypeList<Boolean>                              $inStoreReturnsOffered                   Are in-store returns offered? (For more advanced return methods use the [[returnMethod]] property.)
 * @property-read SchemaTypeList<ReturnLabelSourceEnumeration>         $itemDefectReturnLabelSource             The method (from an enumeration) by which the customer obtains a return shipping label for a defect product.
 * @property-read SchemaTypeList<Text|Country>                         $applicableCountry                       A country where a particular merchant return policy applies to, for example the two-letter ISO 3166-1 alpha-2 country code.
 */
interface MerchantReturnPolicy extends Intangible
{
}
