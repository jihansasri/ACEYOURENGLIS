---
layout: default
title: Basic Usage
description: Basic usage of the CommonMark parser
---

# Basic Usage

The `CommonMarkConverter` class provides a simple wrapper for converting Markdown to HTML:

```php
require __DIR__ . '/vendor/autoload.php';

use League\CommonMark\CommonMarkConverter;

$converter = new CommonMarkConverter();
echo $converter->convertToHtml('# Hello World!');

// <h1>Hello World!</h1>
```

Or if you want GitHub-Flavored Markdown:

```php
use League\CommonMark\GithubFlavoredMarkdownConverter;

$converter = new GithubFlavoredMarkdownConverter();
echo $converter->convertToHtml('# Hello World!');

// <h1>Hello World!</h1>
```

<i class="fa fa-exclamation-triangle"></i>
**Important:** See the [security](/1.3/security/) section for important details on avoiding security misconfigurations.

The actual conversion process has three steps:

 1. Creating an `Environment`, adding whichever extensions/parser/renders you need
 2. Parsing the Markdown input into an AST
 3. Rendering the AST document as HTML

`CommonMarkConverter` handles this for you, but you can execute that process yourself if you wish:

```php
require __DIR__ . '/vendor/autoload.php';

use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;

$environment = Environment::createCommonMarkEnvironment();
$parser = new DocParser($environment);
$htmlRenderer = new HtmlRenderer($environment);

$markdown = '# Hello World!';

$document = $parser->parse($markdown);
echo $htmlRenderer->renderBlock($document);

// <h1>Hello World!</h1>
```

[Additional customization](/1.3/customization/overview/) is also possible, and we have many handy [extensions](/1.3/extensions/overview/) to enable additional syntax and features.

## Supported Character Encodings

Please note that only UTF-8 and ASCII encodings are supported.  If your Markdown uses a different encoding please convert it to UTF-8 before running it through this library.
