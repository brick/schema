<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:AnatomicalStructure
 *
 * @property-read SchemaTypeList<MedicalTherapy>      $relatedTherapy            A medical therapy related to this anatomy.
 * @property-read SchemaTypeList<AnatomicalStructure> $connectedTo               Other anatomical structures to which this structure is connected.
 * @property-read SchemaTypeList<AnatomicalStructure> $subStructure              Component (sub-)structure(s) that comprise this anatomical structure.
 * @property-read SchemaTypeList<MedicalCondition>    $relatedCondition          A medical condition associated with this anatomy.
 * @property-read SchemaTypeList<Text>                $associatedPathophysiology If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
 * @property-read SchemaTypeList<AnatomicalSystem>    $partOfSystem              The anatomical or organ system that this structure is part of.
 * @property-read SchemaTypeList<ImageObject>         $diagram                   An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
 * @property-read SchemaTypeList<Text>                $bodyLocation              Location in the body of the anatomical structure.
 */
interface AnatomicalStructure extends MedicalEntity
{
}
