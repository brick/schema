<?php

declare(strict_types=1);

namespace Brick\Schema;

use ArrayIterator;
use Brick\Schema\Interfaces\Thing;
use Countable;
use IteratorAggregate;
use Override;
use Stringable;

use function count;
use function is_string;
use function trim;

/**
 * @template-implements IteratorAggregate<int<0, max>, Thing|string>
 */
final class SchemaTypeList implements Countable, IteratorAggregate, Stringable
{
    /**
     * @var list<Thing|string>
     */
    private array $values = [];

    public function addValue(Thing|string $value): void
    {
        $this->values[] = $value;
    }

    /**
     * Returns all the values in this list.
     *
     * @return list<Thing|string>
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * Returns the first value in this list, or null if empty.
     */
    public function getFirstValue(): Thing|string|null
    {
        return $this->values[0] ?? null;
    }

    /**
     * Returns the first non-empty trimmed string from the list, or null if none.
     */
    public function getFirstNonEmptyStringValue(): ?string
    {
        foreach ($this->values as $value) {
            if (is_string($value)) {
                $value = trim($value);

                if ($value !== '') {
                    return $value;
                }
            }
        }

        return null;
    }

    /**
     * Attempts to convert this list to a string.
     *
     * If this list contains at least one value, and the first one is a string, this one is returned.
     * If the list is empty, or the first value is not a string, null is returned.
     */
    public function toString(): ?string
    {
        if (isset($this->values[0]) && is_string($this->values[0])) {
            return $this->values[0];
        }

        return null;
    }

    /**
     * Returns the number of values in this list.
     */
    #[Override]
    public function count(): int
    {
        return count($this->values);
    }

    /**
     * Makes the object iterable.
     *
     * @return ArrayIterator<int<0, max>, Thing|string>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->values);
    }

    /**
     * Converts this list to a string.
     *
     * The logic is slightly different from toString().
     *
     * If this list contains at least one string, the first string value will be returned.
     * If this list does not contain any string, an empty string is returned.
     */
    #[Override]
    public function __toString(): string
    {
        foreach ($this->values as $value) {
            if (is_string($value)) {
                return $value;
            }
        }

        return '';
    }
}
