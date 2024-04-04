<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Date;

/**
 * schema:Organization
 *
 * @property-read SchemaTypeList<ProgramMembership|Organization>           $memberOf                  An Organization (or ProgramMembership) to which this Person or Organization belongs.
 * @property-read SchemaTypeList<Place>                                    $foundingLocation          The place where the Organization was founded.
 * @property-read SchemaTypeList<OfferCatalog>                             $hasOfferCatalog           Indicates an OfferCatalog listing for this Organization, Person, or Service.
 * @property-read SchemaTypeList<Text>                                     $awards                    Awards won by or for this item.
 * @property-read SchemaTypeList<Person>                                   $alumni                    Alumni of an organization.
 * @property-read SchemaTypeList<NonprofitType>                            $nonprofitStatus           nonprofitStatus indicates the legal status of a non-profit organization in its primary place of business.
 * @property-read SchemaTypeList<Text>                                     $slogan                    A slogan or motto associated with the item.
 * @property-read SchemaTypeList<OwnershipInfo|Product>                    $owns                      Products owned by the organization or person.
 * @property-read SchemaTypeList<Text>                                     $award                     An award won by or for this item.
 * @property-read SchemaTypeList<Event>                                    $event                     Upcoming or past event associated with this place, organization, or action.
 * @property-read SchemaTypeList<Offer>                                    $makesOffer                A pointer to products or services offered by the organization or person.
 * @property-read SchemaTypeList<Review>                                   $review                    A review of the item.
 * @property-read SchemaTypeList<Place>                                    $hasPOS                    Points-of-Sales operated by the organization or person.
 * @property-read SchemaTypeList<Text>                                     $duns                      The Dun & Bradstreet DUNS number for identifying an organization or business person.
 * @property-read SchemaTypeList<Organization|Brand>                       $brand                     The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
 * @property-read SchemaTypeList<Language|Text>                            $knowsLanguage             Of a [[Person]], and less typically of an [[Organization]], to indicate a known language. We do not distinguish skill levels or reading/writing/speaking/signing here. Use language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
 * @property-read SchemaTypeList<Organization>                             $department                A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
 * @property-read SchemaTypeList<Text|URL|Thing>                           $knowsAbout                Of a [[Person]], and less typically of an [[Organization]], to indicate a topic that is known about - suggesting possible expertise but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or [[JobPosting]] descriptions.
 * @property-read SchemaTypeList<Date>                                     $foundingDate              The date that this organization was founded.
 * @property-read SchemaTypeList<URL|CreativeWork>                         $diversityPolicy           Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on both staffing and sources, typically providing staffing data.
 * @property-read SchemaTypeList<Text>                                     $leiCode                   An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
 * @property-read SchemaTypeList<URL|CreativeWork>                         $publishingPrinciples      The publishingPrinciples property indicates (typically via [[URL]]) a document describing the editorial principles of an [[Organization]] (or individual, e.g. a [[Person]] writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are those of the party primarily responsible for the creation of the [[CreativeWork]].
 * @property-read SchemaTypeList<URL|ImageObject>                          $logo                      An associated logo.
 * @property-read SchemaTypeList<AboutPage|Text|URL|CreativeWork>          $ownershipFundingInfo      For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media setting, this is with particular reference to editorial independence.   Note that the [[funder]] is also available and can be used to make basic funder information machine-readable.
 * @property-read SchemaTypeList<Review>                                   $reviews                   Review of the item.
 * @property-read SchemaTypeList<Text>                                     $isicV4                    The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
 * @property-read SchemaTypeList<Text>                                     $telephone                 The telephone number.
 * @property-read SchemaTypeList<PostalAddress|VirtualLocation|Text|Place> $location                  The location of, for example, where an event is happening, where an organization is located, or where an action takes place.
 * @property-read SchemaTypeList<URL|CreativeWork>                         $correctionsPolicy         For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
 * @property-read SchemaTypeList<Text|Place|AdministrativeArea|GeoShape>   $areaServed                The geographic area where a service or offered item is provided.
 * @property-read SchemaTypeList<Grant>                                    $funding                   A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
 * @property-read SchemaTypeList<Person>                                   $employee                  Someone working for this organization.
 * @property-read SchemaTypeList<QuantitativeValue>                        $numberOfEmployees         The number of employees in an organization, e.g. business.
 * @property-read SchemaTypeList<MerchantReturnPolicy>                     $hasMerchantReturnPolicy   Specifies a MerchantReturnPolicy that may be applicable.
 * @property-read SchemaTypeList<Text>                                     $iso6523Code               An organization identifier as defined in [ISO 6523(-1)](https://en.wikipedia.org/wiki/ISO/IEC_6523). The identifier should be in the `XXXX:YYYYYY:ZZZ` or `XXXX:YYYYYY`format. Where `XXXX` is a 4 digit _ICD_ (International Code Designator), `YYYYYY` is an _OID_ (Organization Identifier) with all formatting characters (dots, dashes, spaces) removed with a maximal length of 35 characters, and `ZZZ` is an optional OPI (Organization Part Identifier) with a maximum length of 35 characters. The various components (ICD, OID, OPI) are joined with a colon character (ASCII `0x3a`). Note that many existing organization identifiers defined as attributes like [leiCode](https://schema.org/leiCode) (`0199`), [duns](https://schema.org/duns) (`0060`) or [GLN](https://schema.org/globalLocationNumber) (`0088`) can be expressed using ISO-6523. If possible, ISO-6523 codes should be preferred to populating [vatID](https://schema.org/vatID) or [taxID](https://schema.org/taxID), as ISO identifiers are less ambiguous.
 * @property-read SchemaTypeList<Text>                                     $taxID                     The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
 * @property-read SchemaTypeList<Text>                                     $naics                     The North American Industry Classification System (NAICS) code for a particular organization or business person.
 * @property-read SchemaTypeList<Person>                                   $founders                  A person who founded this organization.
 * @property-read SchemaTypeList<ContactPoint>                             $contactPoint              A contact point for a person or organization.
 * @property-read SchemaTypeList<AdministrativeArea|GeoShape|Place>        $serviceArea               The geographic area where the service is provided.
 * @property-read SchemaTypeList<Text>                                     $globalLocationNumber      The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
 * @property-read SchemaTypeList<Text|URL|DefinedTerm>                     $keywords                  Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
 * @property-read SchemaTypeList<Text>                                     $email                     Email address.
 * @property-read SchemaTypeList<CreativeWork|URL>                         $ethicsPolicy              Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards of behavior expected by the organization.
 * @property-read SchemaTypeList<Organization|Person>                      $sponsor                   A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
 * @property-read SchemaTypeList<InteractionCounter>                       $agentInteractionStatistic The number of completed interactions for this entity, in a particular role (the 'agent'), in a particular action (indicated in the statistic), and in a particular context (i.e. interactionService).
 * @property-read SchemaTypeList<Person>                                   $employees                 People working for this organization.
 * @property-read SchemaTypeList<Event>                                    $events                    Upcoming or past events associated with this place or organization.
 * @property-read SchemaTypeList<InteractionCounter>                       $interactionStatistic      The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used.
 * @property-read SchemaTypeList<Text>                                     $legalName                 The official name of the organization, e.g. the registered company name.
 * @property-read SchemaTypeList<Text>                                     $vatID                     The Value-added Tax ID of the organization or person.
 * @property-read SchemaTypeList<Person|Organization>                      $members                   A member of this organization.
 * @property-read SchemaTypeList<Organization|Person>                      $funder                    A person or organization that supports (sponsors) something through some kind of financial contribution.
 * @property-read SchemaTypeList<AggregateRating>                          $aggregateRating           The overall rating, based on a collection of reviews or ratings, of the item.
 * @property-read SchemaTypeList<EducationalOccupationalCredential>        $hasCredential             A credential awarded to the Person or Organization.
 * @property-read SchemaTypeList<Demand>                                   $seeks                     A pointer to products or services sought by the organization or person (demand).
 * @property-read SchemaTypeList<Organization>                             $subOrganization           A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
 * @property-read SchemaTypeList<Date>                                     $dissolutionDate           The date that this organization was dissolved.
 * @property-read SchemaTypeList<ContactPoint>                             $contactPoints             A contact point for a person or organization.
 * @property-read SchemaTypeList<Person>                                   $founder                   A person who founded this organization.
 * @property-read SchemaTypeList<URL|CreativeWork>                         $unnamedSourcesPolicy      For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
 * @property-read SchemaTypeList<Organization>                             $parentOrganization        The larger organization that this organization is a [[subOrganization]] of, if any.
 * @property-read SchemaTypeList<Text|PostalAddress>                       $address                   Physical address of the item.
 * @property-read SchemaTypeList<Text>                                     $faxNumber                 The fax number.
 * @property-read SchemaTypeList<CreativeWork|URL>                         $actionableFeedbackPolicy  For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
 * @property-read SchemaTypeList<Article|URL>                              $diversityStaffingReport   For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might be for example ASNE or RTDNA (US) reports, or self-reported.
 * @property-read SchemaTypeList<Certification>                            $hasCertification          Certification information about a product, organization, service, place, or person.
 * @property-read SchemaTypeList<Person|Organization>                      $member                    A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
 */
interface Organization extends Thing
{
}
