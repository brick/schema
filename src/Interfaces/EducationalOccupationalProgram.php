<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:EducationalOccupationalProgram
 *
 * @property-read SchemaTypeList<Duration>                                                      $timeToComplete                The expected length of time to complete the program if attending full-time.
 * @property-read SchemaTypeList<Date|DateTime>                                                 $endDate                       The end date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
 * @property-read SchemaTypeList<Date>                                                          $applicationDeadline           The date at which the program stops collecting applications for the next enrollment cycle.
 * @property-read SchemaTypeList<Text|URL>                                                      $educationalProgramMode        Similar to courseMode, the medium or means of delivery of the program as a whole. The value may either be a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
 * @property-read SchemaTypeList<DefinedTerm|Text>                                              $programType                   The type of educational or occupational program. For example, classroom, internship, alternance, etc.
 * @property-read SchemaTypeList<EducationalOccupationalCredential|Text|URL>                    $occupationalCredentialAwarded A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
 * @property-read SchemaTypeList<Text|CategoryCode>                                             $occupationalCategory          A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
 * @property-read SchemaTypeList<Integer>                                                       $maximumEnrollment             The maximum number of students who may be enrolled in the program.
 * @property-read SchemaTypeList<Number>                                                        $termsPerYear                  The number of times terms of study are offered per year. Semesters and quarters are common units for term. For example, if the student can only take 2 semesters for the program in one year, then termsPerYear should be 2.
 * @property-read SchemaTypeList<Course>                                                        $hasCourse                     A course or class that is one of the learning opportunities that constitute an educational / occupational program. No information is implied about whether the course is mandatory or optional; no guarantee is implied about whether the course will be available to everyone on the program.
 * @property-read SchemaTypeList<Duration>                                                      $termDuration                  The amount of time in a term as defined by the institution. A term is a length of time where students take one or more classes. Semesters and quarters are common units for term.
 * @property-read SchemaTypeList<URL|EducationalOccupationalCredential|Text>                    $educationalCredentialAwarded  A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
 * @property-read SchemaTypeList<Demand|Offer>                                                  $offers                        An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
 * @property-read SchemaTypeList<EducationalOccupationalCredential|Course|AlignmentObject|Text> $programPrerequisites          Prerequisites for enrolling in the program.
 * @property-read SchemaTypeList<Date>                                                          $applicationStartDate          The date at which the program begins collecting applications for the next enrollment cycle.
 * @property-read SchemaTypeList<MonetaryAmountDistribution>                                    $salaryUponCompletion          The expected salary upon completing the training.
 * @property-read SchemaTypeList<MonetaryAmountDistribution>                                    $trainingSalary                The estimated salary earned while in the program.
 * @property-read SchemaTypeList<Person|Organization>                                           $provider                      The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.
 * @property-read SchemaTypeList<Date|DateTime>                                                 $startDate                     The start date and time of the item (in [ISO 8601 date format](http://en.wikipedia.org/wiki/ISO_8601)).
 * @property-read SchemaTypeList<DayOfWeek>                                                     $dayOfWeek                     The day of the week for which these opening hours are valid.
 * @property-read SchemaTypeList<Text>                                                          $timeOfDay                     The time of day the program normally runs. For example, "evenings".
 * @property-read SchemaTypeList<Integer|StructuredValue>                                       $typicalCreditsPerTerm         The number of credits or units a full-time student would be expected to take in 1 term however 'term' is defined by the institution.
 * @property-read SchemaTypeList<Text|DefinedTerm>                                              $financialAidEligible          A financial aid type or program which students may use to pay for tuition or fees associated with the program.
 * @property-read SchemaTypeList<Integer|StructuredValue>                                       $numberOfCredits               The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
 */
interface EducationalOccupationalProgram extends Intangible
{
}
