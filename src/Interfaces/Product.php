<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\Boolean;

/**
 * schema:Product
 *
 * @property-read SchemaTypeList<DefinedTerm|Text>                                     $pattern                     A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to controlled value schemes are also supported.
 * @property-read SchemaTypeList<QuantitativeValue|Distance>                           $width                       The width of the item.
 * @property-read SchemaTypeList<Text>                                                 $nsn                         Indicates the [NATO stock number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a [[Product]]. 
 * @property-read SchemaTypeList<ProductModel|Text>                                    $model                       The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
 * @property-read SchemaTypeList<Text>                                                 $gtin14                      The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
 * @property-read SchemaTypeList<Date>                                                 $productionDate              The date of production of the item, e.g. vehicle.
 * @property-read SchemaTypeList<Text>                                                 $awards                      Awards won by or for this item.
 * @property-read SchemaTypeList<Product|Service>                                      $isRelatedTo                 A pointer to another, somehow related product (or multiple products).
 * @property-read SchemaTypeList<Product|Service>                                      $isSimilarTo                 A pointer to another, functionally similar product (or multiple products).
 * @property-read SchemaTypeList<Text>                                                 $slogan                      A slogan or motto associated with the item.
 * @property-read SchemaTypeList<Text>                                                 $award                       An award won by or for this item.
 * @property-read SchemaTypeList<Review>                                               $review                      A review of the item.
 * @property-read SchemaTypeList<QuantitativeValue>                                    $hasMeasurement              A measurement of an item, For example, the inseam of pants, the wheel size of a bicycle, the gauge of a screw, or the carbon footprint measured for certification by an authority. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
 * @property-read SchemaTypeList<Country>                                              $countryOfOrigin             The country of origin of something, including products as well as creative  works such as movie and TV content.
 * @property-read SchemaTypeList<Text>                                                 $countryOfAssembly           The place where the product was assembled.
 * @property-read SchemaTypeList<Organization|Brand>                                   $brand                       The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
 * @property-read SchemaTypeList<OfferItemCondition>                                   $itemCondition               A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.
 * @property-read SchemaTypeList<QuantitativeValue|Distance>                           $height                      The height of the item.
 * @property-read SchemaTypeList<Text>                                                 $gtin12                      The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
 * @property-read SchemaTypeList<PropertyValue>                                        $additionalProperty          A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
 * @property-read SchemaTypeList<URL|ImageObject>                                      $logo                        An associated logo.
 * @property-read SchemaTypeList<Review>                                               $reviews                     Review of the item.
 * @property-read SchemaTypeList<Product>                                              $isAccessoryOrSparePartFor   A pointer to another product (or multiple products) for which this product is an accessory or spare part.
 * @property-read SchemaTypeList<Grant>                                                $funding                     A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
 * @property-read SchemaTypeList<Text|URL|Product>                                     $material                    A material that something is made from, e.g. leather, wool, cotton, paper.
 * @property-read SchemaTypeList<MerchantReturnPolicy>                                 $hasMerchantReturnPolicy     Specifies a MerchantReturnPolicy that may be applicable.
 * @property-read SchemaTypeList<Boolean>                                              $isFamilyFriendly            Indicates whether this content is family friendly.
 * @property-read SchemaTypeList<QuantitativeValue>                                    $weight                      The weight of the product or person.
 * @property-read SchemaTypeList<Text>                                                 $countryOfLastProcessing     The place where the item (typically [[Product]]) was last processed and tested before importation.
 * @property-read SchemaTypeList<Text|QuantitativeValue|DefinedTerm|SizeSpecification> $size                        A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a  QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be more applicable. 
 * @property-read SchemaTypeList<Demand|Offer>                                         $offers                      An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
 * @property-read SchemaTypeList<Audience>                                             $audience                    An intended audience, i.e. a group for whom something was created.
 * @property-read SchemaTypeList<Text|URL|DefinedTerm>                                 $keywords                    Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
 * @property-read SchemaTypeList<AdultOrientedEnumeration>                             $hasAdultConsideration       Used to tag an item to be intended or suitable for consumption or use by adults only.
 * @property-read SchemaTypeList<ProductGroup|ProductModel>                            $isVariantOf                 Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]], the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]], this property can apply to any [[Product]] included in the group.
 * @property-read SchemaTypeList<URL|ImageObject>                                      $colorSwatch                 A color swatch image, visualizing the color of a [[Product]]. Should match the textual description specified in the [[color]] property. This can be a URL or a fully described ImageObject.
 * @property-read SchemaTypeList<Product>                                              $isConsumableFor             A pointer to another product (or multiple products) for which this product is a consumable.
 * @property-read SchemaTypeList<Text>                                                 $mobileUrl                   The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs is a dedicated 'mobile site'.
 * @property-read SchemaTypeList<Text>                                                 $mpn                         The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
 * @property-read SchemaTypeList<Organization>                                         $manufacturer                The manufacturer of the product.
 * @property-read SchemaTypeList<EnergyConsumptionDetails>                             $hasEnergyConsumptionDetails Defines the energy efficiency Category (also known as "class" or "rating") for a product according to an international energy efficiency standard.
 * @property-read SchemaTypeList<Text|URL|CategoryCode|PhysicalActivityCategory|Thing> $category                    A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
 * @property-read SchemaTypeList<Text>                                                 $color                       The color of the product.
 * @property-read SchemaTypeList<ItemList|WebContent|Text|ListItem>                    $positiveNotes               Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.
 * @property-read SchemaTypeList<Text|URL>                                             $gtin                        A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes.
 * @property-read SchemaTypeList<Text>                                                 $gtin13                      The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
 * @property-read SchemaTypeList<Text>                                                 $inProductGroupWithID        Indicates the [[productGroupID]] for a [[ProductGroup]] that this product [[isVariantOf]]. 
 * @property-read SchemaTypeList<AggregateRating>                                      $aggregateRating             The overall rating, based on a collection of reviews or ratings, of the item.
 * @property-read SchemaTypeList<Text>                                                 $sku                         The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
 * @property-read SchemaTypeList<Date>                                                 $releaseDate                 The release date of a product or product model. This can be used to distinguish the exact variant of a product.
 * @property-read SchemaTypeList<ItemList|Text|WebContent|ListItem>                    $negativeNotes               Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry 
 * @property-read SchemaTypeList<QuantitativeValue|Distance>                           $depth                       The depth of the item.
 * @property-read SchemaTypeList<Text>                                                 $productID                   The product identifier, such as ISBN. For example: ``` meta itemprop="productID" content="isbn:123-456-789" ```.
 * @property-read SchemaTypeList<Date>                                                 $purchaseDate                The date the item, e.g. vehicle, was purchased by the current owner.
 * @property-read SchemaTypeList<Text>                                                 $gtin8                       The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
 * @property-read SchemaTypeList<URL|Text>                                             $asin                        An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article).
 * @property-read SchemaTypeList<Certification>                                        $hasCertification            Certification information about a product, organization, service, place, or person.
 */
interface Product extends Thing
{
}
