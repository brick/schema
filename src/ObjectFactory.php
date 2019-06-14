<?php

declare(strict_types=1);

namespace Brick\Schema;

/**
 * Dynamically builds objects implementing arbitrary interfaces.
 *
 * @internal
 */
class ObjectFactory
{
    /**
     * A map of schema.org type to list of schema.org properties.
     *
     * Example: ['Thing'] = ['name', 'image', ...]
     *
     * @var string[][]
     */
    private $propertiesByType = [];

    /**
     * ObjectFactory constructor.
     *
     * @param string[][] $propertiesByType
     */
    public function __construct(array $propertiesByType)
    {
        $this->propertiesByType = $propertiesByType;
    }

    /**
     * @param string[] $types The list of schema.org types the object implements.
     *
     * @return object
     */
    public function build(array $types) : object
    {
        $properties = array_unique(array_merge(... array_map(function(string $type) : array {
            return $this->propertiesByType[$type];
        }, $types)));

        $interfaces = array_map(function(string $type) : string {
            return 'Brick\\Schema\\Interfaces\\' . $type;
        }, $types);

        $php = sprintf(
            'return new class (%s, %s) extends %s implements %s {};',
            var_export($types, true),
            var_export($properties, true),
            Base::class,
            implode(', ', $interfaces)
        );

        return eval($php);
    }
}
