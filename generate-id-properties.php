<?php

/**
 * This script generates a list of schema.org properties that map to a URL according to schema.org's JSON-LD context.
 * The resulting id-properties.php file is required by brick/structured-data for now, because it does not have a
 * compliant JSON-LD context parser yet. When it does, we'll be able to get rid of this list, and ship this library
 * with its own jsonldcontext.jsonld file and pass this file to the library directly.
 */

declare(strict_types=1);

use Brick\VarExporter\VarExporter;

require 'vendor/autoload.php';

$schema = json_decode(file_get_contents(__DIR__ . '/jsonldcontext.jsonld'));

$ids = [];

foreach ($schema->{'@context'} as $key => $value) {
    if (is_object($value) && isset($value->{'@type'}) && $value->{'@type'} === '@id') {
        $id = $value->{'@id'};
        $id = preg_replace('/^schema\:/', 'http://schema.org/', $id);

        $ids[] = $id;
    }
}

$php = '<?php ' . VarExporter::export($ids, VarExporter::ADD_RETURN);

file_put_contents(__DIR__ . '/data/id-properties.php', $php);
