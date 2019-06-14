<?php

namespace Brick\Schema\Meta;

/**
 * @internal This class is used to generate the schema classes, and is not part of the public API.
 *
 * @see https://meta.schema.org/
 * @see https://schema.org/Class
 */
class _Class
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string|null
     */
    public $supersededById;

    /**
     * @var string[]
     */
    public $subClassOfIds = [];
}
