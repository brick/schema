<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:VisualArtwork
 *
 * @property-read SchemaTypeList<QuantitativeValue|Distance> $width          The width of the item.
 * @property-read SchemaTypeList<QuantitativeValue|Distance> $height         The height of the item.
 * @property-read SchemaTypeList<Person>                     $inker          The individual who traces over the pencil drawings in ink after pencils are complete.
 * @property-read SchemaTypeList<Person>                     $penciler       The individual who draws the primary narrative artwork.
 * @property-read SchemaTypeList<Person>                     $letterer       The individual who adds lettering, including speech balloons and sound effects, to artwork.
 * @property-read SchemaTypeList<Text|URL>                   $artMedium      The material used. (E.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
 * @property-read SchemaTypeList<Text|URL>                   $artform        e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
 * @property-read SchemaTypeList<Text|URL>                   $artworkSurface The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
 * @property-read SchemaTypeList<Text|URL>                   $surface        A material used as a surface in some artwork, e.g. Canvas, Paper, Wood, Board, etc.
 * @property-read SchemaTypeList<Person>                     $artist         The primary artist for a work
 * @property-read SchemaTypeList<Person>                     $colorist       The individual who adds color to inked drawings.
 * @property-read SchemaTypeList<Text|Integer>               $artEdition     The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
 * @property-read SchemaTypeList<QuantitativeValue|Distance> $depth          The depth of the item.
 */
interface VisualArtwork extends CreativeWork
{
}
