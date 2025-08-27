<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:MedicalScholarlyArticle
 *
 * @property-read SchemaTypeList<Text> $publicationType The type of the medical article, taken from the US NLM MeSH publication type catalog. See also [MeSH documentation](http://www.nlm.nih.gov/mesh/pubtypes.html).
 */
interface MedicalScholarlyArticle extends ScholarlyArticle
{
}
