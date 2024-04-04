<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Article
 *
 * @property-read SchemaTypeList<Text|CreativeWork>          $backstory      For an [[Article]], typically a [[NewsArticle]], the backstory property provides a textual summary giving a brief explanation of why and how an article was created. In a journalistic setting this could include information about reporting process, methods, interviews, data sources, etc.
 * @property-read SchemaTypeList<Text>                       $pagination     Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
 * @property-read SchemaTypeList<Integer>                    $wordCount      The number of words in the text of the Article.
 * @property-read SchemaTypeList<Integer|Text>               $pageStart      The page on which the work starts; for example "135" or "xiii".
 * @property-read SchemaTypeList<Text>                       $articleSection Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
 * @property-read SchemaTypeList<Text>                       $articleBody    The actual body of the article.
 * @property-read SchemaTypeList<Integer|Text>               $pageEnd        The page on which the work ends; for example "138" or "xvi".
 * @property-read SchemaTypeList<URL|SpeakableSpecification> $speakable      Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate the parts most likely to be generally useful for speech.
 */
interface Article extends CreativeWork
{
}
