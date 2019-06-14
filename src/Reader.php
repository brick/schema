<?php

declare(strict_types=1);

namespace Brick\Schema;

use Brick\Schema\Interfaces\Thing;

use Brick\StructuredData\HTMLReader;
use Brick\StructuredData\Item;
use Brick\StructuredData\Reader\JsonLdReader;
use Brick\StructuredData\Reader\MicrodataReader;
use Brick\StructuredData\Reader\RdfaLiteReader;
use Brick\StructuredData\Reader\ReaderChain;

class Reader
{
    /**
     * @var HTMLReader
     */
    private $htmlReader;

    /**
     * @var ObjectFactory
     */
    private $objectFactory;

    /**
     * Reader constructor.
     */
    public function __construct()
    {
        $idProperties = require __DIR__ . '/../data/id-properties.php';

        $idPropertiesHttps = array_map(function(string $id) {
            return preg_replace('/^http\:/', 'https:', $id);
        }, $idProperties);

        $idProperties = array_merge($idProperties, $idPropertiesHttps);

        $reader = new ReaderChain(
            new MicrodataReader(),
            new RdfaLiteReader(),
            new JsonLdReader($idProperties)
        );

        $this->htmlReader = new HTMLReader($reader);

        $properties = require __DIR__ . '/../data/properties.php';

        $this->objectFactory = new ObjectFactory($properties);
    }

    /**
     * @param string $file
     * @param string $url
     *
     * @return Thing[]
     */
    public function read(string $file, string $url) : array
    {
        $items = $this->htmlReader->read($file, $url);

        $things = array_map(function(Item $item) {
            return $this->convertItemToThing($item);
        }, $items);

        $things = array_filter($things);
        $things = array_values($things);

        return $things;
    }

    /**
     * Converts a structured data Item to a schema.org Thing.
     *
     * If the types of the item do not match a schema.org Thing, this method returns null.
     *
     * @param Item $item
     *
     * @return Thing|null
     */
    private function convertItemToThing(Item $item) : ?Thing
    {
        $types = [];

        foreach ($item->getTypes() as $type) {
            $type = $this->schemaOrgIdToLabel($type);

            if ($type !== null) {
                $types[] = $type;
            }
        }

        $thing = $this->objectFactory->build($types);

        if ($thing === null) {
            return null;
        }

        foreach ($item->getProperties() as $name => $values) {
            $name = $this->schemaOrgIdToLabel($name);

            if ($name === null) {
                continue;
            }

            if (isset($thing->{$name})) {
                /** @var SchemaTypeList $schemaTypeList */
                $schemaTypeList = $thing->{$name};

                foreach ($values as $value) {
                    if ($value instanceof Item) {
                        $value = $this->convertItemToThing($value);

                        if ($value === null) {
                            continue;
                        }
                    }

                    $schemaTypeList->addValue($value);
                }
            }
        }

        return $thing;
    }

    /**
     * Converts a schema.org ID to a label.
     *
     * e.g. http://schema.org/Product => Product
     *
     * @param string $schemaOrgId
     *
     * @return string|null The label, or null if not a valid schema.org id.
     */
    private function schemaOrgIdToLabel(string $schemaOrgId) : ?string
    {
        if (preg_match('/https?\:\/\/schema.org\/([A-Za-z0-9]+)$/', $schemaOrgId, $matches) === 1) {
            return $matches[1];
        }

        return null;
    }
}
