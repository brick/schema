<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalStudy
 *
 * @property-read SchemaTypeList<MedicalEntity>                           $studySubject    A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
 * @property-read SchemaTypeList<MedicalCondition>                        $healthCondition Specifying the health condition(s) of a patient, medical study, or other target audience.
 * @property-read SchemaTypeList<AdministrativeArea>                      $studyLocation   The location in which the study is taking/took place.
 * @property-read SchemaTypeList<MedicalStudyStatus|EventStatusType|Text> $status          The status of the study (enumerated).
 * @property-read SchemaTypeList<Organization|Person>                     $sponsor         A person or organization that supports a thing through a pledge, promise, or financial contribution. E.g. a sponsor of a Medical Study or a corporate sponsor of an event.
 */
interface MedicalStudy extends MedicalEntity
{
}
