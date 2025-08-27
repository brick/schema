<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:SoftwareSourceCode
 *
 * @property-read SchemaTypeList<Text>                  $sampleType          What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
 * @property-read SchemaTypeList<URL>                   $codeRepository      Link to the repository where the un-compiled, human readable code and related code is located (SVN, GitHub, CodePlex).
 * @property-read SchemaTypeList<SoftwareApplication>   $targetProduct       Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
 * @property-read SchemaTypeList<Text|ComputerLanguage> $programmingLanguage The computer programming language.
 * @property-read SchemaTypeList<Text>                  $codeSampleType      What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
 * @property-read SchemaTypeList<Text>                  $runtimePlatform     Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
 * @property-read SchemaTypeList<Text>                  $runtime             Runtime platform or script interpreter dependencies (example: Java v1, Python 2.3, .NET Framework 3.0).
 */
interface SoftwareSourceCode extends CreativeWork
{
}
