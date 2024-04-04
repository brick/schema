<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:HealthTopicContent
 *
 * @property-read SchemaTypeList<HealthAspectEnumeration> $hasHealthAspect Indicates the aspect or aspects specifically addressed in some [[HealthTopicContent]]. For example, that the content is an overview, or that it talks about treatment, self-care, treatments or their side-effects.
 */
interface HealthTopicContent extends WebContent
{
}
