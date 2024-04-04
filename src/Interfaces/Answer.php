<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Answer
 *
 * @property-read SchemaTypeList<CreativeWork|Comment> $parentItem        The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about it.
 * @property-read SchemaTypeList<WebContent|Comment>   $answerExplanation A step-by-step or full explanation about Answer. Can outline how this Answer was achieved or contain more broad clarification or statement about it. 
 */
interface Answer extends Comment
{
}
