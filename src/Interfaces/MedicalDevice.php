<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalDevice
 *
 * @property-read SchemaTypeList<Text>                         $procedure             A description of the procedure involved in setting up, using, and/or installing the device.
 * @property-read SchemaTypeList<Text>                         $preOp                 A description of the workup, testing, and other preparations required before implanting this device.
 * @property-read SchemaTypeList<MedicalEntity>                $adverseOutcome        A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.
 * @property-read SchemaTypeList<Text|MedicalContraindication> $contraindication      A contraindication for this therapy.
 * @property-read SchemaTypeList<Text>                         $postOp                A description of the postoperative procedures, care, and/or followups for this device.
 * @property-read SchemaTypeList<MedicalEntity>                $seriousAdverseOutcome A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
 */
interface MedicalDevice extends MedicalEntity
{
}
