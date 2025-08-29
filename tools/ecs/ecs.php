<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ClassNotation\OrderedTypesFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->import(__DIR__ . '/vendor/brick/coding-standard/ecs.php');

    $libRootPath = realpath(__DIR__ . '/../../');

    $ecsConfig->paths(
        [
            $libRootPath . '/src',
            $libRootPath . '/generate-id-properties.php',
            $libRootPath . '/generate-schema.php',
            __FILE__,
        ],
    );

    $ecsConfig->skip([
        // No dot at the end of URL docblocks
        PhpdocSummaryFixer::class => [
            $libRootPath . '/src/DataType',
            $libRootPath . '/src/Interfaces',
        ],

        // No changing of Integer to 'integer' or 'int'
        PhpdocScalarFixer::class => $libRootPath . '/src/Interfaces',
        PhpdocTypesFixer::class => $libRootPath . '/src/Interfaces',

        // We want to keep Thing|string order
        OrderedTypesFixer::class => $libRootPath . '/src/SchemaTypeList.php',
        PhpdocTypesOrderFixer::class => $libRootPath . '/src/SchemaTypeList.php',
    ]);
};
