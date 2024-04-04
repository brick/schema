<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;
use Brick\Schema\DataType\Boolean;

/**
 * schema:Book
 *
 * @property-read SchemaTypeList<Integer>        $numberOfPages The number of pages in the book.
 * @property-read SchemaTypeList<Text>           $isbn          The ISBN of the book.
 * @property-read SchemaTypeList<BookFormatType> $bookFormat    The format of the book.
 * @property-read SchemaTypeList<Person>         $illustrator   The illustrator of the book.
 * @property-read SchemaTypeList<Boolean>        $abridged      Indicates whether the book is an abridged edition.
 * @property-read SchemaTypeList<Text>           $bookEdition   The edition of the book.
 */
interface Book extends CreativeWork
{
}
