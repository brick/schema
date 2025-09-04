<?php

declare(strict_types=1);

namespace Brick\Schema;

use Brick\Schema\Interfaces\Thing;
use Brick\StructuredData\HTMLReader;
use Brick\StructuredData\Reader;
use Brick\StructuredData\Reader\JsonLdReader;
use Brick\StructuredData\Reader\MicrodataReader;
use Brick\StructuredData\Reader\RdfaLiteReader;
use Brick\StructuredData\Reader\ReaderChain;
use DOMDocument;

use function array_map;
use function array_merge;
use function preg_replace;

final class SchemaReader
{
    private readonly Reader $reader;

    private readonly HTMLReader $htmlReader;

    private readonly ThingConverter $thingConverter;

    /**
     * SchemaReader constructor.
     */
    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
        $this->htmlReader = new HTMLReader($this->reader);
        $this->thingConverter = new ThingConverter();
    }

    /**
     * Returns a schema reader that can read only Microdata.
     */
    public static function forMicrodata(): SchemaReader
    {
        return new SchemaReader(new MicrodataReader());
    }

    /**
     * Returns a schema reader that can read only RDFa Lite.
     */
    public static function forRdfaLite(): SchemaReader
    {
        return new SchemaReader(new RdfaLiteReader());
    }

    /**
     * Returns a schema reader that can read only JSON-LD.
     */
    public static function forJsonLd(): SchemaReader
    {
        return new SchemaReader(self::buildJsonLdReader());
    }

    /**
     * Returns a schema reader that can read Microdata, RDFa Lite and JSON-LD.
     */
    public static function forAllFormats(): SchemaReader
    {
        return new SchemaReader(self::buildReaderChain());
    }

    /**
     * Builds a structured data Reader chain comprised of Microdata, RDFa and JSON-LD readers.
     */
    public static function buildReaderChain(): ReaderChain
    {
        return new ReaderChain(
            new MicrodataReader(),
            new RdfaLiteReader(),
            self::buildJsonLdReader(),
        );
    }

    /**
     * Builds a JSON-LD reader configured for schema.org.
     */
    public static function buildJsonLdReader(): JsonLdReader
    {
        $idProperties = require __DIR__ . '/../data/id-properties.php';

        /** @var list<string> $idPropertiesHttps */
        $idPropertiesHttps = array_map(fn (string $id) => preg_replace('/^http\:/', 'https:', $id), $idProperties);

        $idProperties = array_merge($idProperties, $idPropertiesHttps);

        return new JsonLdReader($idProperties);
    }

    /**
     * @return Thing[]
     */
    public function read(DOMDocument $document, string $url): array
    {
        $items = $this->reader->read($document, $url);

        return $this->thingConverter->convertItemsToThings($items);
    }

    /**
     * @return Thing[]
     */
    public function readHtml(string $html, string $url): array
    {
        $items = $this->htmlReader->read($html, $url);

        return $this->thingConverter->convertItemsToThings($items);
    }

    /**
     * @return Thing[]
     */
    public function readHtmlFile(string $file, string $url): array
    {
        $items = $this->htmlReader->readFile($file, $url);

        return $this->thingConverter->convertItemsToThings($items);
    }
}
