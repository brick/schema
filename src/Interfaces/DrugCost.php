<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Number;

/**
 * schema:DrugCost
 *
 * @property-read SchemaTypeList<AdministrativeArea>           $applicableLocation The location in which the status applies.
 * @property-read SchemaTypeList<Text>                         $costOrigin         Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
 * @property-read SchemaTypeList<Text>                         $drugUnit           The unit in which the drug is measured, e.g. '5 mg tablet'.
 * @property-read SchemaTypeList<Text|Number|QualitativeValue> $costPerUnit        The cost per unit of the drug.
 * @property-read SchemaTypeList<DrugCostCategory>             $costCategory       The category of cost, such as wholesale, retail, reimbursement cap, etc.
 * @property-read SchemaTypeList<Text>                         $costCurrency       The currency (in 3-letter) of the drug cost. See: http://en.wikipedia.org/wiki/ISO_4217. 
 */
interface DrugCost extends MedicalEntity
{
}
