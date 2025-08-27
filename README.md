## Brick\Schema

<img src="https://raw.githubusercontent.com/brick/brick/master/logo.png" alt="" align="left" height="64">

A PHP library to read [schema.org](https://schema.org) structured data from HTML pages.

[![Latest Stable Version](https://poser.pugx.org/brick/schema/v/stable)](https://packagist.org/packages/brick/schema)
[![Total Downloads](https://poser.pugx.org/brick/schema/downloads)](https://packagist.org/packages/brick/schema)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](http://opensource.org/licenses/MIT)

### Introduction

This library extracts structured data (Microdata, RDFa Lite & JSON-LD) from HTML pages using [brick/structured-data](https://github.com/brick/structured-data), and maps any schema.org information found to IDE- and static analysis- friendly objects implementing schema.org interfaces.

### Installation

This library is installable via [Composer](https://getcomposer.org/):

```bash
composer require brick/schema
```

### Requirements

This library requires PHP 8.1 or later. It makes use of the following extensions:

- [dom](https://www.php.net/manual/en/book.dom.php)
- [json](https://www.php.net/manual/en/book.json.php)
- [libxml](https://www.php.net/manual/en/book.libxml.php)

These extensions are enabled by default, and should be available in most PHP installations.

### Project status & release process

This library is under development. It is likely to change fast in the early `0.x` releases. However, the library follows a strict BC break convention:

The current releases are numbered `0.x.y`. When a non-breaking change is introduced (adding new methods, fixing bugs,
optimizing existing code, etc.), `y` is incremented.

**When a breaking change is introduced, a new `0.x` version cycle is always started.**

It is therefore safe to lock your project to a given release cycle, such as `0.2.*`.

If you need to upgrade to a newer release cycle, check the [release history](https://github.com/brick/schema/releases)
for a list of changes introduced by each further `0.x.0` version.

### Quickstart

First of all, you need to instantiate a `SchemaReader`:

```php
use Brick\Schema\SchemaReader;

// read all available formats:
$schemaReader = SchemaReader::forAllFormats();

// or read a single format:
// $schemaReader = SchemaReader::forMicrodata();
// $schemaReader = SchemaReader::forRdfaLite();
// $schemaReader = SchemaReader::forJsonLd();
```

Then, you can proceed to reading an HTML document:

```php
// The URL the document was retrieved from. This will be used only to resolve relative
// URLs in property values. No attempt will be performed to connect to this URL.
$url = 'https://example.com/product/123';

$things = $schemaReader->readHtml($html, $url);               // An HTML document as a string
// or $things = $schemaReader->readHtmlFile($htmlFile, $url); // A path to an HTML file
// or $things = $schemaReader->read($domDocument, $url);      // A DOMDocument instance
```

This returns an array of `Thing` instances, which is the [base class](https://schema.org/Thing) from which all schema.org objects inherit.

All the objects returned implement `Thing`, but more importantly, they implement the interface(s) defined in the markup,
such as `Person` or `Product`. These objects pass `instanceof` checks, and allow IDE autocompletion and static
analysis by listing their available properties.

Schema.org interfaces live under the `Brick\Schema\Interfaces` namespace:

- `Brick\Schema\Interfaces\Thing`
    - `Brick\Schema\Interfaces\Person`
    - ...

Every property of every interface, for example `Person::$birthDate` is an instance of `SchemaTypeList`, which is a container for zero or more values.
Each value may be another `Thing`, or a plain text `string`.

With that in mind, let's see an example:

```php
use Brick\Schema\Interfaces as Schema;

foreach ($things as $thing) {
    if ($thing instanceof Schema\Product) {
        // Your IDE should now provide autocompletion for available Product properties:
        // category, color, gtin, sku, offers, ...

        foreach ($thing->offers as $offer) {
            // You should always check if the Thing matches the expected type,
            // even if the schema.org property documents a single type (here, Offer).
            // See the Caveats section below for an explanation why.

            if ($offer instanceof Schema\Offer) {
                // Yes! we do have an offer, let's check its price.
                // Don't forget that all properties have zero or more values, let's take the first one:

                $price = $offer->price->getFirstValue();

                // For the same reason as above (see Caveats), always check the type of the value,
                // it could very well be a nested Thing instance, or null if there is no value.

                if (is_string($price)) {
                    echo $price;
                }

                // There are also helper functions in the SchemaTypeList object when you expect a string.
                // For example, this will return the first string value, or null if not found:

                $priceCurrency = $offer->priceCurrency->toString();

                if ($priceCurrency !== null) {
                    echo $priceCurrency;
                }
            }
        }
    }
}
```

Note: if you're attempting to access a property that's not defined on any of the types the `Thing` object implements,
an exception will be thrown.

### Caveats

While the schema.org properties are well defined, they are designed to be quite lenient in terms of what *values* they
accept. While they do document expected types for every property (for example, a [Product](https://schema.org/Product)'s
offers may only be of the `Offer` type), in practice this library, in accordance with the schema.org datamodel,
**accepts any `Thing` or `string` in any field.**

You should therefore take all documented interface property types with a grain of salt, and ***always* perform checks
such as `instanceof` or `is_string()` in your code**.

To quote the [schema.org website](https://schema.org/docs/datamodel.html):

> Conformance
>
> Although it might be helpful for search applications if structured data markup always followed schema.org very strictly, in practice this is unrealistic. Our schemas also continue to evolve in response to feedback, discussion and new applications of the data. Where possible we amend existing definitions incrementally rather than introducing lots of new properties for similar use cases. **We have consequently based schema.org on a very flexible datamodel, and take a pragmatic view of conformance.**
>
> We expect schema.org properties to be used with new types, both from schema.org and from external extensions. **We also expect that often, where we expect a property value of type Person, Place, Organization or some other subClassOf Thing, we will get a text string, even if our schemas don't formally document that expectation.** In the spirit of "some data is better than none", search engines will often accept this markup and do the best we can. Similarly, some types such as Role and URL can be used with all properties, and we encourage this kind of experimentation amongst data consumers.
