<?php

declare(strict_types=1);

namespace Brick\Schema\DataType;

use Brick\Schema\SchemaType;
use Brick\Schema\SchemaTypeList;
use Override;

/**
 * http://schema.org/DataType
 */
class DataType implements SchemaType
{
    private readonly string $number;

    /**
     * DataType constructor.
     *
     * @param string $number
     */
    public function __construct(string $number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->number;
    }

    #[Override]
    public function includesProperty(string $name) : bool
    {
        return false;
    }

    #[Override]
    public function getProperty(string $name) : SchemaTypeList
    {
        return new SchemaTypeList([]);
    }
}
