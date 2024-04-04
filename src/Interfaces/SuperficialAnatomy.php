<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:SuperficialAnatomy
 *
 * @property-read SchemaTypeList<MedicalTherapy>                       $relatedTherapy            A medical therapy related to this anatomy.
 * @property-read SchemaTypeList<Text>                                 $significance              The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
 * @property-read SchemaTypeList<AnatomicalSystem|AnatomicalStructure> $relatedAnatomy            Anatomical systems or structures that relate to the superficial anatomy.
 * @property-read SchemaTypeList<MedicalCondition>                     $relatedCondition          A medical condition associated with this anatomy.
 * @property-read SchemaTypeList<Text>                                 $associatedPathophysiology If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
 */
interface SuperficialAnatomy extends MedicalEntity
{
}
