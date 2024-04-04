<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:WebPageElement
 *
 * @property-read SchemaTypeList<XPathType>       $xpath       An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
 * @property-read SchemaTypeList<CssSelectorType> $cssSelector A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
 */
interface WebPageElement extends CreativeWork
{
}
