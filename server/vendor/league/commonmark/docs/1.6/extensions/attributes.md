---
layout: default
title: Attributes Extension
description: The AttributesExtension allows HTML attributes to be added from within the document.
---

# Attributes

The `AttributesExtension` allows HTML attributes to be added from within the document.

## Attribute Syntax

The basic syntax was inspired by [Kramdown](http://kramdown.gettalong.org/syntax.html#attribute-list-definitions)'s Attribute Lists feature.

You can assign any attribute to a block-level element. Just directly prepend or follow the block with a block inline attribute list.
That consists of a left curly brace, optionally followed by a colon, the attribute definitions and a right curly brace:

```markdown
> A nice blockquote
{: title="Blockquote title"}

{#id .class}
## Header
```

As with a block-level element you can assign any attribute to a span-level elements using a span inline attribute list,
that has the same syntax and must immediately follow the span-level element:

```markdown
This is *red*{style="color: red"}.
```

## Installation

This extension is bundled with `league/commonmark`. This library can be installed via Composer:

```bash
composer require league/commonmark
```

See the [installation](/1.6/installation/) section for more details.

## Usage

Configure your `Environment` as usual and simply add the `AttributesExtension`:

```php
use League\CommonMark\Environment;
use League\CommonMark\Extension\Attributes\AttributesExtension;
use League\CommonMark\MarkdownConverter;

// Obtain a pre-configured Environment with all the CommonMark parsers/renderers ready-to-go
$environment = Environment::createCommonMarkEnvironment();

// Add the extension
$environment->addExtension(new AttributesExtension());

// Set your configuration if needed
$environment->mergeConfig([
    // ...
]);

// Instantiate the converter engine and start converting some Markdown!
$converter = new MarkdownConverter($environment);
echo $converter->convertToHtml('# Hello World!');
```
