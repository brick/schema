<?php

declare(strict_types=1);

namespace Brick\Schema\Interfaces;

use Brick\Schema\SchemaTypeList;
use Brick\Schema\DataType\Text;

/**
 * schema:Blog
 *
 * @property-read SchemaTypeList<Text>        $issn      The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
 * @property-read SchemaTypeList<BlogPosting> $blogPosts Indicates a post that is part of a [[Blog]]. Note that historically, what we term a "Blog" was once known as a "weblog", and that what we term a "BlogPosting" is now often colloquially referred to as a "blog".
 * @property-read SchemaTypeList<BlogPosting> $blogPost  A posting that is part of this blog.
 */
interface Blog extends CreativeWork
{
}
