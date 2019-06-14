<?php

declare(strict_types=1);

use Brick\Schema\Meta\_Class;
use Brick\Schema\Meta\_Property;
use Brick\VarExporter\VarExporter;

require 'vendor/autoload.php';

$schema = json_decode(file_get_contents(__DIR__ . '/schema.jsonld'), true);

$version = $schema['@id']; // http://schema.org/#3.6

/** @var _Class[] $classes */
$classes = [];

/** @var _Property[] $properties */
$properties = [];

foreach ($schema['@graph'] as $item) {
    $id   = $item['@id'];
    $type = $item['@type'];

    $comment = $item['rdfs:comment'];
    $label   = $item['rdfs:label'];

    if ($type === 'rdfs:Class') {
        $class = new _Class();
        $class->comment = $comment;
        $class->label = $label;

        if (isset($item['http://schema.org/supersededBy'])) {
            $class->supersededById = $item['http://schema.org/supersededBy']['@id'];
        }

        $class->subClassOfIds = getOneOrMoreIds($item, 'rdfs:subClassOf');

        $classes[$id] = $class;
    }

    if ($type === 'rdf:Property') {
        $property = new _Property();
        $property->comment = cleanupComment($comment);
        $property->label = $label;

        if (isset($item['http://schema.org/supersededBy'])) {
            $property->supersededById = $item['http://schema.org/supersededBy']['@id'];
        }

        if (isset($item['http://schema.org/inverseOf'])) {
            $property->inverseOfId = $item['http://schema.org/inverseOf']['@id'];
        }

        $property->domainIncludesIds = getOneOrMoreIds($item, 'http://schema.org/domainIncludes');
        $property->rangeIncludesIds  = getOneOrMoreIds($item, 'http://schema.org/rangeIncludes');

        $properties[] = $property;
    }
}

/**
 * Strips HTML tags out of comments, and only keep the first line as a short description.
 *
 * @param string $comment
 *
 * @return string
 */
function cleanupComment(string $comment) : string
{
    $comment = strip_tags($comment);
    $comment = html_entity_decode($comment, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $pos = strpos($comment, "\n");

    if ($pos !== false) {
        $comment = substr($comment, 0, $pos);
    }

    return $comment;
}

/**
 * Returns one or more values from a JSON {"@id": ...} object, or an array of these.
 *
 * @param array  $item The item, that may or may not contain the key that maps to the JSON object or array of.
 * @param string $key  The key.
 *
 * @return string[] The values.
 */
function getOneOrMoreIds(array $item, string $key) : array
{
    if (! isset($item[$key])) {
        return [];
    }

    if (isset($item[$key]['@id'])) {
        return [
            $item[$key]['@id']
        ];
    }

    return array_map(function(array $value) : string {
        return $value['@id'];
    }, $item[$key]);
}

/**
 * Finds child classes.
 *
 * @param _Class[]    $classes  The flat map of id to schema.org classes.
 * @param string|null $parentId The parent id to look for.
 *
 * @return _Class[] A map of id to schema.org child classes.
 */
function findChildren(array $classes, ?string $parentId) : array
{
    return array_filter($classes, function(_Class $class) use ($parentId) : bool {
        if ($parentId === null) {
            return $class->subClassOfIds === [];
        }

        return in_array($parentId, $class->subClassOfIds, true);
    });
}

/**
 * Returns a map of schema.org class labels to a list of class labels it extends.
 *
 * Only direct ancestors are returned.
 *
 * e.g. ['Thing' => [], 'Product' => ['Thing'], ...]
 *
 * @param _Class[] $classes A map of id to schema.org classes.
 *
 * @return array
 */
function getSubclassOf(array $classes) : array
{
    $result = [];

    foreach ($classes as $id => $class) {
        $subClassOfLabels = [];

        foreach ($class->subClassOfIds as $subclassOfId) {
            if (isset($classes[$subclassOfId])) {
                $subClassOfLabels[] = $classes[$subclassOfId]->label;
            } else {
                echo "Warning: $id is marked as subClassOf $subclassOfId which does not exist.\n";
            }
        }

        $result[$class->label] = $subClassOfLabels;
    }

    return $result;
}

$subclassOf = getSubclassOf($classes);

/**
 * Returns all parents of the given class name, including indirect ancestors.
 *
 * @param string $class The class label.
 *
 * @return string[] The parent class labels.
 */
function getClassParents(string $class) : array
{
    global $subclassOf;

    $result = [];

    foreach ($subclassOf[$class] as $parent) {
        $result[] = [$parent];
        $result[] = getClassParents($parent);
    }

    if (! $result) {
        return [];
    }

    return array_unique(array_merge(...$result));
}

/**
 * Returns a map of schema.org class labels to list of properties.
 *
 * e.g. ['Thing' => ['name', 'url', ...], 'Product' => ['sku', 'mpn', ...], ...]
 *
 * Properties inherited from parent classes are NOT included.
 *
 * @param _Class[]    $classes    A map of id to schema.org classes to generate.
 * @param _Property[] $properties The flat map of id to schema.org properties.
 *
 * @return array
 */
function getClassProperties(array $classes, array $properties) : array
{
    $result = [];

    foreach ($classes as $id => $class) {
        /** @var _Property[] $classProperties */
        $classProperties = array_filter($properties, function(_Property $property) use ($id) : bool {
            return in_array($id, $property->domainIncludesIds, true);
        });

        $classProperties = array_map(function(_Property $property) {
            return $property->label;
        }, $classProperties);

        $result[$class->label] = array_values($classProperties);
    }

    return $result;
}

$classProperties = getClassProperties($classes, $properties);

/**
 * Returns a map of schema.org class labels to list of properties, INCLUDING parent properties.
 *
 * e.g. ['Thing' => ['name', 'url', ...], 'Product' => ['sku', 'mpn', ...], ...]
 *
 * Class names and property names are sorted.
 *
 * @return array
 */
function getClassAllProperties() : array
{
    global $classes;
    global $classProperties;

    $result = [];

    foreach ($classes as $class) {
        $properties = [$classProperties[$class->label]];

        foreach (getClassParents($class->label) as $parent) {
            $properties[] = $classProperties[$parent];
        }

        if ($properties) {
            $properties = array_merge(...$properties);
        } else {
            $properties = [];
        }

        $properties = array_unique($properties);
        $properties = array_values($properties);

        sort($properties);

        $result[$class->label] = $properties;
    }

    ksort($result);

    return $result;
}

$classAllProperties = getClassAllProperties();

file_put_contents(__DIR__ . '/data/properties.php', '<?php ' . VarExporter::export(
        $classAllProperties, VarExporter::ADD_RETURN
    ));

/**
 * @param _Class[]    $classes    A map of id to schema.org classes to generate.
 * @param _Property[] $properties The flat map of id to schema.org properties.
 *
 * @return void
 */
function generatePhpInterfaces(array $classes, array $properties) : void
{
    global $subclassOf;

    foreach ($classes as $id => $class) {
        $subClassOfLabels = $subclassOf[$class->label];

        $interface = $class->label;

        if ($subClassOfLabels) {
            $interface .= ' extends ' . implode(', ', $subClassOfLabels);
        }

        /** @var _Property[] $classProperties */
        $classProperties = array_filter($properties, function(_Property $property) use ($id) : bool {
            return in_array($id, $property->domainIncludesIds, true);
        });

        $maxNameLength = array_reduce($classProperties, function(int $max, _Property $property) : int {
            return max($max, strlen($property->label));
        }, 0);

        $maxTypeLength = 0;

        $typeMap = [
            'http://schema.org/Text'     => 'Text',
            'http://schema.org/Number'   => 'Number',
            'http://schema.org/Date'     => 'Date',
            'http://schema.org/DateTime' => 'DateTime',
            'http://schema.org/Time'     => 'Time',
            'http://schema.org/Boolean'  => 'Boolean',
        ];

        $php  = "<?php\n\n";
        $php .= "declare(strict_types=1);\n\n";
        $php .= "namespace Brick\Schema\Interfaces;\n\n";

        if ($classProperties) {
            $php .= "use Brick\Schema\SchemaTypeList;\n";

            $dataTypesUsed = [];

            // @todo duplicated with below
            foreach ($classProperties as $property) {
                $types = [];

                foreach ($property->rangeIncludesIds as $rangeIncludesId) {
                    if (isset($typeMap[$rangeIncludesId])) {
                        $dataTypesUsed[] = $typeMap[$rangeIncludesId];
                        $types[] = $typeMap[$rangeIncludesId];
                    } elseif (isset($classes[$rangeIncludesId])) {
                        $types[] = $classes[$rangeIncludesId]->label;
                    } else {
                        echo "Warning: $id is has a property {$property->label} of type $rangeIncludesId which does not exist.\n";
                    }
                }

                $type = 'SchemaTypeList';

                if ($types) {
                    $type .= '<' . implode('|', array_unique($types)) . '>';
                }

                $maxTypeLength = max($maxTypeLength, strlen($type));
            }

            if ($dataTypesUsed) {
                foreach (array_unique($dataTypesUsed) as $dataType) {
                    $php .= "use Brick\Schema\DataType\\$dataType;\n";
                }
            }

            $php .= "\n";
        }

        $php .= "/**\n";
        $php .= " * $id\n";

        if ($classProperties) {
            $php .= " *\n";

            foreach ($classProperties as $property) {
                $types = [];

                foreach ($property->rangeIncludesIds as $rangeIncludesId) {
                    if (isset($typeMap[$rangeIncludesId])) {
                        $types[] = $typeMap[$rangeIncludesId];
                    } elseif (isset($classes[$rangeIncludesId])) {
                        $types[] = $classes[$rangeIncludesId]->label;
                    }
                }

                $label = str_pad($property->label, $maxNameLength, ' ', STR_PAD_RIGHT);

                $type = 'SchemaTypeList';

                if ($types) {
                    $type .= '<' . implode('|', array_unique($types)) . '>';
                }

                $type = str_pad($type, $maxTypeLength, ' ', STR_PAD_RIGHT);

                $php .= " * @property-read $type \${$label} {$property->comment}\n";
            }
        }

        $php .= " */\n";
        $php .= "interface $interface\n";
        $php .= "{\n";
        $php .= "}\n";

        file_put_contents(__DIR__ . "/src/Interfaces/{$class->label}.php", $php);
    }
}

generatePhpInterfaces($classes, $properties);

echo "done\n";

/* unhandled types

    [http://schema.org/BookFormatType]
    [http://schema.org/RestrictedDiet]
    [http://schema.org/MusicReleaseFormatType]
    [http://schema.org/OfferItemCondition]
    [http://schema.org/MusicAlbumReleaseType]
    [http://schema.org/ItemAvailability]
    [http://schema.org/OrderStatus]
    [http://schema.org/SteeringPositionValue]
    [http://schema.org/RsvpResponseType]
    [http://schema.org/MusicAlbumProductionType]
    [http://schema.org/DayOfWeek]
    [http://schema.org/ActionStatusType]
    [http://schema.org/ContactPointOption]
    [http://schema.org/GamePlayMode]
    [http://schema.org/MapCategoryType]
    [http://schema.org/DigitalDocumentPermissionType]
    [http://schema.org/EventStatusType]
    [http://schema.org/PaymentStatusType]
    [http://schema.org/ReservationStatusType]
    [http://schema.org/ItemListOrderType]
    [http://schema.org/DriveWheelConfigurationValue]
    [http://schema.org/GameServerStatus]
    [http://schema.org/GenderType]
    [http://schema.org/BoardingPolicyType]
    [http://schema.org/DeliveryMethod]
    [http://schema.org/Audience]

*/
