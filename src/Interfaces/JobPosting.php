<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Boolean;
use Brick\Schema\DataType\Number;
use Brick\Schema\DataType\Date;
use Brick\Schema\DataType\DateTime;

/**
 * schema:JobPosting
 *
 * @property-read SchemaTypeList<Occupation>                                       $relevantOccupation            The Occupation for the JobPosting.
 * @property-read SchemaTypeList<AdministrativeArea>                               $applicantLocationRequirements The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be in a physical office. Note: This should not be used for citizenship or work visa requirements.
 * @property-read SchemaTypeList<DefinedTerm|Text|URL>                             $physicalRequirement           A description of the types of physical activity associated with the job. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
 * @property-read SchemaTypeList<Boolean>                                          $directApply                   Indicates whether an [[url]] that is associated with a [[JobPosting]] enables direct application for the job, via the posting website. A job posting is considered to have directApply of [[True]] if an application process for the specified job can be directly initiated via the url(s) given (noting that e.g. multiple internet domains might nevertheless be involved at an implementation level). A value of [[False]] is appropriate if there is no clear path to applying directly online for the specified job, navigating directly from the JobPosting url(s) supplied.
 * @property-read SchemaTypeList<MonetaryAmountDistribution|MonetaryAmount|Number> $estimatedSalary               An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
 * @property-read SchemaTypeList<Date|DateTime>                                    $datePosted                    Publication date of an online listing.
 * @property-read SchemaTypeList<Text>                                             $incentiveCompensation         Description of bonus and commission compensation aspects of the job.
 * @property-read SchemaTypeList<Text>                                             $eligibilityToWorkRequirement  The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.
 * @property-read SchemaTypeList<Text>                                             $jobBenefits                   Description of benefits associated with the job.
 * @property-read SchemaTypeList<Text>                                             $benefits                      Description of benefits associated with the job.
 * @property-read SchemaTypeList<Text|CategoryCode>                                $occupationalCategory          A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
 * @property-read SchemaTypeList<Place>                                            $jobLocation                   A (typically single) geographic location associated with the job position.
 * @property-read SchemaTypeList<Organization>                                     $employmentUnit                Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
 * @property-read SchemaTypeList<Boolean>                                          $jobImmediateStart             An indicator as to whether a position is available for an immediate start.
 * @property-read SchemaTypeList<Date|Text>                                        $jobStartDate                  The date on which a successful applicant for this job would be expected to start work. Choose a specific date in the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
 * @property-read SchemaTypeList<Text>                                             $workHours                     The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
 * @property-read SchemaTypeList<Text|URL>                                         $securityClearanceRequirement  A description of any security clearance requirements of the job.
 * @property-read SchemaTypeList<DefinedTerm|Text>                                 $skills                        A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is desired or required to fulfill this role or to work in this occupation.
 * @property-read SchemaTypeList<ContactPoint>                                     $applicationContact            Contact details for further information relevant to this job posting.
 * @property-read SchemaTypeList<Text>                                             $employmentType                Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
 * @property-read SchemaTypeList<Date|DateTime>                                    $validThrough                  The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
 * @property-read SchemaTypeList<Text|OccupationalExperienceRequirements>          $experienceRequirements        Description of skills and experience needed for the position or Occupation.
 * @property-read SchemaTypeList<Text|DefinedTerm>                                 $industry                      The industry associated with the job position.
 * @property-read SchemaTypeList<Text>                                             $title                         The title of the job.
 * @property-read SchemaTypeList<Integer>                                          $totalJobOpenings              The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions is unclear or not known.
 * @property-read SchemaTypeList<Text|EducationalOccupationalCredential>           $educationRequirements         Educational background needed for the position or Occupation.
 * @property-read SchemaTypeList<Text>                                             $employerOverview              A description of the employer, career opportunities and work environment for this position.
 * @property-read SchemaTypeList<Text>                                             $incentives                    Description of bonus and commission compensation aspects of the job.
 * @property-read SchemaTypeList<PriceSpecification|MonetaryAmount|Number>         $baseSalary                    The base salary of the job or of an employee in an EmployeeRole.
 * @property-read SchemaTypeList<Organization|Person>                              $hiringOrganization            Organization or Person offering the job position.
 * @property-read SchemaTypeList<Text>                                             $specialCommitments            Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
 * @property-read SchemaTypeList<EducationalOccupationalCredential|Text>           $qualifications                Specific qualifications required for this role or Occupation.
 * @property-read SchemaTypeList<Text>                                             $salaryCurrency                The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
 * @property-read SchemaTypeList<Text|URL|DefinedTerm>                             $sensoryRequirement            A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
 * @property-read SchemaTypeList<Text>                                             $responsibilities              Responsibilities associated with this role or Occupation.
 * @property-read SchemaTypeList<Boolean>                                          $experienceInPlaceOfEducation  Indicates whether a [[JobPosting]] will accept experience (as indicated by [[OccupationalExperienceRequirements]]) in place of its formal educational qualifications (as indicated by [[educationRequirements]]). If true, indicates that satisfying one of these requirements is sufficient.
 * @property-read SchemaTypeList<Text>                                             $jobLocationType               A description of the job location (e.g. TELECOMMUTE for telecommute jobs).
 */
interface JobPosting extends Intangible
{
}
