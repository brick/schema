<?php

declare(strict_types=1);

namespace Brick\Schema;

use ArrayIterator;
use IteratorAggregate;

class SchemaTypeList implements IteratorAggregate
{
    /**
     * @var SchemaType[]
     */
    private $values;

    /**
     * SchemaTypeList constructor.
     *
     * @param SchemaType[] $values
     */
    public function __construct(array $values = [])
    {
        $this->values = $values;
    }

    /**
     * @return SchemaType[]
     */
    public function getValues() : array
    {
        return $this->values;
    }

    /**
     * @return SchemaType|null
     */
    public function getFirstValue() : ?SchemaType
    {
        return $this->values[0] ?? null;
    }

    /**
     * @return ArrayIterator<SchemaType>
     */
    public function getIterator() : ArrayIterator
    {
        return new ArrayIterator($this->values);
    }
}
