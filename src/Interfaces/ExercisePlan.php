<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:ExercisePlan
 *
 * @property-read SchemaTypeList<QuantitativeValue|Text>     $restPeriods        How often one should break from the activity.
 * @property-read SchemaTypeList<Energy|QuantitativeValue>   $workload           Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
 * @property-read SchemaTypeList<Number|QuantitativeValue>   $repetitions        Number of times one should repeat the activity.
 * @property-read SchemaTypeList<QuantitativeValue|Duration> $activityDuration   Length of time to engage in the activity.
 * @property-read SchemaTypeList<Text|QuantitativeValue>     $activityFrequency  How often one should engage in the activity.
 * @property-read SchemaTypeList<Text>                       $exerciseType       Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
 * @property-read SchemaTypeList<QuantitativeValue|Text>     $intensity          Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
 * @property-read SchemaTypeList<Text>                       $additionalVariable Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
 */
interface ExercisePlan extends CreativeWork, PhysicalActivity
{
}
