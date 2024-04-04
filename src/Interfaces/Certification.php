<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Date;

/**
 * schema:Certification
 *
 * @property-read SchemaTypeList<DefinedTerm|Text>               $certificationIdentification Identifier of a certification instance (as registered with an independent certification body). Typically this identifier can be used to consult and verify the certification instance. See also [gs1:certificationIdentification](https://www.gs1.org/voc/certificationIdentification).
 * @property-read SchemaTypeList<QuantitativeValue>              $hasMeasurement              A measurement of an item, For example, the inseam of pants, the wheel size of a bicycle, the gauge of a screw, or the carbon footprint measured for certification by an authority. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
 * @property-read SchemaTypeList<URL|ImageObject>                $logo                        An associated logo.
 * @property-read SchemaTypeList<CertificationStatusEnumeration> $certificationStatus         Indicates the current status of a certification: active or inactive. See also  [gs1:certificationStatus](https://www.gs1.org/voc/certificationStatus).
 * @property-read SchemaTypeList<DateTime|Date>                  $auditDate                   Date when a certification was last audited. See also  [gs1:certificationAuditDate](https://www.gs1.org/voc/certificationAuditDate).
 * @property-read SchemaTypeList<Organization>                   $issuedBy                    The organization issuing the item, for example a [[Permit]], [[Ticket]], or [[Certification]].
 * @property-read SchemaTypeList<AdministrativeArea>             $validIn                     The geographic area where the item is valid. Applies for example to a [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]]. 
 * @property-read SchemaTypeList<Date|DateTime>                  $validFrom                   The date when the item becomes valid.
 * @property-read SchemaTypeList<Thing>                          $about                       The subject matter of the content.
 * @property-read SchemaTypeList<Date|DateTime>                  $datePublished               Date of first publication or broadcast. For example the date a [[CreativeWork]] was broadcast or a [[Certification]] was issued.
 * @property-read SchemaTypeList<Date|DateTime>                  $expires                     Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance is time-limited, a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date, or a [[Certification]] the validity has expired.
 */
interface Certification extends CreativeWork
{
}
