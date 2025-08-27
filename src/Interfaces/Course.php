<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Course
 *
 * @property-read SchemaTypeList<Syllabus>                                   $syllabusSections              Indicates (typically several) Syllabus entities that lay out what each section of the overall course will cover.
 * @property-read SchemaTypeList<Course|AlignmentObject|Text>                $coursePrerequisites           Requirements for taking the Course. May be completion of another [[Course]] or a textual description like "permission of instructor". Requirements may be a pre-requisite competency, referenced using [[AlignmentObject]].
 * @property-read SchemaTypeList<EducationalOccupationalCredential|Text|URL> $occupationalCredentialAwarded A description of the qualification, award, certificate, diploma or other occupational credential awarded as a consequence of successful completion of this course or program.
 * @property-read SchemaTypeList<URL|EducationalOccupationalCredential|Text> $educationalCredentialAwarded  A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course or program.
 * @property-read SchemaTypeList<CourseInstance>                             $hasCourseInstance             An offering of the course at a specific time and place or through specific media or mode of study or to a specific section of students.
 * @property-read SchemaTypeList<Text>                                       $courseCode                    The identifier for the [[Course]] used by the course [[provider]] (e.g. CS101 or 6.001).
 * @property-read SchemaTypeList<Language|Text>                              $availableLanguage             A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
 * @property-read SchemaTypeList<Integer>                                    $totalHistoricalEnrollment     The total number of students that have enrolled in the history of the course.
 * @property-read SchemaTypeList<Text|DefinedTerm>                           $financialAidEligible          A financial aid type or program which students may use to pay for tuition or fees associated with the program.
 * @property-read SchemaTypeList<Integer|StructuredValue>                    $numberOfCredits               The number of credits or units awarded by a Course or required to complete an EducationalOccupationalProgram.
 */
interface Course extends LearningResource, CreativeWork
{
}
