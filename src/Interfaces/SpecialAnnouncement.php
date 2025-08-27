<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Text;

/**
 * schema:SpecialAnnouncement
 *
 * @property-read SchemaTypeList<WebContent|URL>                                       $quarantineGuidelines        Guidelines about quarantine rules, e.g. in the context of a pandemic.
 * @property-read SchemaTypeList<URL|WebContent>                                       $publicTransportClosuresInfo Information about public transport closures.
 * @property-read SchemaTypeList<Date|DateTime>                                        $datePosted                  Publication date of an online listing.
 * @property-read SchemaTypeList<WebContent|URL>                                       $diseasePreventionInfo       Information about disease prevention.
 * @property-read SchemaTypeList<WebContent|URL>                                       $travelBans                  Information about travel bans, e.g. in the context of a pandemic.
 * @property-read SchemaTypeList<CivicStructure|LocalBusiness>                         $announcementLocation        Indicates a specific [[CivicStructure]] or [[LocalBusiness]] associated with the SpecialAnnouncement. For example, a specific testing facility or business with special opening hours. For a larger geographic region like a quarantine of an entire region, use [[spatialCoverage]].
 * @property-read SchemaTypeList<GovernmentService>                                    $governmentBenefitsInfo      governmentBenefitsInfo provides information about government benefits associated with a SpecialAnnouncement.
 * @property-read SchemaTypeList<WebContent|URL>                                       $newsUpdatesAndGuidelines    Indicates a page with news updates and guidelines. This could often be (but is not required to be) the main page containing [[SpecialAnnouncement]] markup on a site.
 * @property-read SchemaTypeList<Text|URL|CategoryCode|PhysicalActivityCategory|Thing> $category                    A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
 * @property-read SchemaTypeList<WebContent|URL>                                       $schoolClosuresInfo          Information about school closures.
 * @property-read SchemaTypeList<DataFeed|URL>                                         $webFeed                     The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
 * @property-read SchemaTypeList<URL|Dataset|Observation|WebContent>                   $diseaseSpreadStatistics     Statistical information about the spread of a disease, either as [[WebContent]], or
 * @property-read SchemaTypeList<WebContent|URL>                                       $gettingTestedInfo           Information about getting tested (for a [[MedicalCondition]]), e.g. in the context of a pandemic.
 */
interface SpecialAnnouncement extends CreativeWork
{
}
