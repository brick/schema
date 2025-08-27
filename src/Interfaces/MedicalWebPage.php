<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalWebPage
 *
 * @property-read SchemaTypeList<Text>                                $aspect          An aspect of medical practice that is considered on the page, such as 'diagnosis', 'treatment', 'causes', 'prognosis', 'etiology', 'epidemiology', etc.
 * @property-read SchemaTypeList<MedicalAudienceType|MedicalAudience> $medicalAudience Medical audience for page.
 */
interface MedicalWebPage extends WebPage
{
}
