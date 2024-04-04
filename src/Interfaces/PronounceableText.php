<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:PronounceableText
 *
 * @property-read SchemaTypeList<Text>          $phoneticText       Representation of a text [[textValue]] using the specified [[speechToTextMarkup]]. For example the city name of Houston in IPA: /ˈhjuːstən/.
 * @property-read SchemaTypeList<Text>          $textValue          Text value being annotated.
 * @property-read SchemaTypeList<Text>          $speechToTextMarkup Form of markup used. eg. [SSML](https://www.w3.org/TR/speech-synthesis11) or [IPA](https://www.wikidata.org/wiki/Property:P898).
 * @property-read SchemaTypeList<Text|Language> $inLanguage         The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
 */
interface PronounceableText
{
}
