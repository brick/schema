<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;

/**
 * schema:Comment
 *
 * @property-read SchemaTypeList<CreativeWork|Comment> $parentItem    The parent of a question, answer or item in general. Typically used for Q/A discussion threads e.g. a chain of comments with the first comment being an [[Article]] or other [[CreativeWork]]. See also [[comment]] which points from something to a comment about it.
 * @property-read SchemaTypeList<Integer>              $upvoteCount   The number of upvotes this question, answer or comment has received from the community.
 * @property-read SchemaTypeList<CreativeWork>         $sharedContent A CreativeWork such as an image, video, or audio clip shared as part of this posting.
 * @property-read SchemaTypeList<Integer>              $downvoteCount The number of downvotes this question, answer or comment has received from the community.
 */
interface Comment extends CreativeWork
{
}
