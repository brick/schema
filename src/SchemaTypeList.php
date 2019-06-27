<?php

declare(strict_types=1);

namespace Brick\Schema;

use Brick\Schema\Interfaces\Thing;

use ArrayIterator;
use Countable;
use IteratorAggregate;

class SchemaTypeList implements Countable, IteratorAggregate
{
    /**
     * @var array<Thing|string>
     */
    private $values = [];

    /**
     * @param Thing|string $value
     */
    public function addValue($value) : void
    {
        $this->values[] = $value;
    }

    /**
     * @return array<Thing|string>
     */
    public function getValues() : array
    {
        return $this->values;
    }

    /**
     * @return Thing|string|null
     */
    public function getFirstValue()
    {
        return $this->values[0] ?? null;
    }

    /**
     * @return string|null
     */
    public function toString() : ?string
    {
        if (isset($this->values[0]) && is_string($this->values[0])) {
            return $this->values[0];
        }

        return null;
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return count($this->values);
    }

    /**
     * @return ArrayIterator<Thing|string>
     */
    public function getIterator() : ArrayIterator
    {
        return new ArrayIterator($this->values);
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        foreach ($this->values as $value) {
            if (is_string($value)) {
                return $value;
            }
        }

        return '';
    }
}
