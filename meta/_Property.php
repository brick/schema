<?php

declare(strict_types=1);

namespace Brick\Schema\Meta;

/**
 * @internal This class is used to generate the schema classes, and is not part of the public API.
 *
 * @see https://meta.schema.org/
 * @see https://schema.org/Property
 */
class _Property
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
     * @var string|null
     */
    public $inverseOfId;

    /**
     * @var string[]
     */
    public $domainIncludesIds = [];

    /**
     * @var string[]
     */
    public $rangeIncludesIds = [];
}
