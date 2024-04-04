<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:ReviewAction
 *
 * @property-read SchemaTypeList<Review> $resultReview A sub property of result. The review that resulted in the performing of the action.
 */
interface ReviewAction extends AssessAction
{
}
