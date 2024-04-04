<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:ExerciseAction
 *
 * @property-read SchemaTypeList<SportsTeam>             $sportsTeam             A sub property of participant. The sports team that participated on this action.
 * @property-read SchemaTypeList<Person>                 $opponent               A sub property of participant. The opponent on this action.
 * @property-read SchemaTypeList<Diet>                   $diet                   A sub property of instrument. The diet used in this action.
 * @property-read SchemaTypeList<SportsEvent>            $sportsEvent            A sub property of location. The sports event where this action occurred.
 * @property-read SchemaTypeList<Place>                  $fromLocation           A sub property of location. The original location of the object or the agent before the action.
 * @property-read SchemaTypeList<Distance>               $distance               The distance travelled, e.g. exercising or travelling.
 * @property-read SchemaTypeList<Place>                  $toLocation             A sub property of location. The final location of the object or the agent after the action.
 * @property-read SchemaTypeList<Place>                  $course                 A sub property of location. The course where this action was taken.
 * @property-read SchemaTypeList<Place>                  $exerciseCourse         A sub property of location. The course where this action was taken.
 * @property-read SchemaTypeList<ExercisePlan>           $exercisePlan           A sub property of instrument. The exercise plan used on this action.
 * @property-read SchemaTypeList<Text>                   $exerciseType           Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
 * @property-read SchemaTypeList<SportsActivityLocation> $sportsActivityLocation A sub property of location. The sports activity location where this action occurred.
 * @property-read SchemaTypeList<Diet>                   $exerciseRelatedDiet    A sub property of instrument. The diet used in this action.
 */
interface ExerciseAction extends PlayAction
{
}
