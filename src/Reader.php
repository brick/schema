<?php

declare(strict_types=1);

namespace Brick\Schema;

use Brick\Schema\Interfaces\Thing;

use Brick\StructuredData\HTMLReader;
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
     * @var ThingConverter
     */
    private $thingConverter;

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
    }

    /**
     * @param string $html
     * @param string $url
     *
     * @return Thing[]
     */
    public function read(string $html, string $url) : array
    {
        $items = $this->htmlReader->read($html, $url);

        return $this->thingConverter->convertItemsToThings($items);
    }

    /**
     * @param string $file
     * @param string $url
     *
     * @return Thing[]
     */
    public function readFile(string $file, string $url) : array
    {
        $items = $this->htmlReader->readFile($file, $url);

        return $this->thingConverter->convertItemsToThings($items);
    }
}
