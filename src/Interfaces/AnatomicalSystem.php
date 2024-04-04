<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:AnatomicalSystem
 *
 * @property-read SchemaTypeList<MedicalTherapy>                       $relatedTherapy            A medical therapy related to this anatomy.
 * @property-read SchemaTypeList<MedicalCondition>                     $relatedCondition          A medical condition associated with this anatomy.
 * @property-read SchemaTypeList<Text>                                 $associatedPathophysiology If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
 * @property-read SchemaTypeList<AnatomicalStructure>                  $relatedStructure          Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
 * @property-read SchemaTypeList<AnatomicalSystem|AnatomicalStructure> $comprisedOf               Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the anatomical system.
 */
interface AnatomicalSystem extends MedicalEntity
{
}
