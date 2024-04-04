<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:HowToSection
 *
 * @property-read SchemaTypeList<Text|CreativeWork|ItemList> $steps A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
 */
interface HowToSection extends CreativeWork, ListItem, ItemList
{
}
