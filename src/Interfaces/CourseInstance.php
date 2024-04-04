<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:CourseInstance
 *
 * @property-read SchemaTypeList<Schedule> $courseSchedule Represents the length and pace of a course, expressed as a [[Schedule]].
 * @property-read SchemaTypeList<Person>   $instructor     A person assigned to instruct or provide instructional assistance for the [[CourseInstance]].
 * @property-read SchemaTypeList<Text|URL> $courseMode     The medium or means of delivery of the course instance or the mode of study, either as a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous"; "full-time" or "part-time") or as a URL reference to a term from a controlled vocabulary (e.g. https://ceds.ed.gov/element/001311#Asynchronous).
 * @property-read SchemaTypeList<Text>     $courseWorkload The amount of work expected of students taking the course, often provided as a figure per week or per month, and may be broken down by type. For example, "2 hours of lectures, 1 hour of lab work and 3 hours of independent study per week".
 */
interface CourseInstance extends Event
{
}
