<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Question
 *
 * @property-read SchemaTypeList<CreativeWork|Comment> $parentItem      The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about it.
 * @property-read SchemaTypeList<Integer>              $answerCount     The number of answers this question has received.
 * @property-read SchemaTypeList<ItemList|Answer>      $acceptedAnswer  The answer(s) that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing on community opinion and/or the view of the Question author.
 * @property-read SchemaTypeList<Answer|ItemList>      $suggestedAnswer An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
 * @property-read SchemaTypeList<Text>                 $eduQuestionType For questions that are part of learning resources (e.g. Quiz), eduQuestionType indicates the format of question being given. Example: "Multiple choice", "Open ended", "Flashcard".
 */
interface Question extends Comment
{
}
