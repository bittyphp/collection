# Bitty Collection

[![Build Status](https://travis-ci.org/bittyphp/bitty-collection.svg?branch=master)](https://travis-ci.org/bittyphp/bitty-collection)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/ddaa03082f9e455a85d747eda2e2160b)](https://www.codacy.com/app/bittyphp/bitty-collection)
[![Total Downloads](https://poser.pugx.org/bittyphp/bitty-collection/downloads)](https://packagist.org/packages/bittyphp/bitty-collection)
[![License](https://poser.pugx.org/bittyphp/bitty-collection/license)](https://packagist.org/packages/bittyphp/bitty-collection)

Simple object collections.

## Installation

It's best to install using [Composer](https://getcomposer.org/).

```sh
$ composer require bittyphp/bitty-collection
```

## Readable Collections

Readable collections MUST implement `Bitty\Collection\ReadableCollectionInterface`. The interface only offers the very basic methods: `has()`, `get()`, and `all()`.

### Basic Usage

```php
<?php

use Bitty\Collection\ReadableArrayCollection;

$collection = new ReadableArrayCollection(
    [
        'foo' => 'bar',
        'baz' => ['blar', 'blah', 'blam'],
    ]
);

// Check if data exists.
if ($collection->has('foo')) {
    // Do something.
}

// Get data, or get a default value if it doesn't exist.
$default = 'not set';
$value = $collection->get('foo', $default);

// Get all the data.
$data = $collection->all();

```

## Writable Collections

Writable collections MUST implement `Bitty\Collection\WritableCollectionInterface`. The interface extends `Bitty\Collection\ReadableCollectionInterface` and adds an additional `set()`.

### Basic Usage

```php
<?php

use Bitty\Collection\WritableArrayCollection;

$collection = new WritableArrayCollection(
    [
        'foo' => 'bar',
        'baz' => ['blar', 'blah', 'blam'],
    ]
);

// Add new data to the collection.
$collection->set('key', 'value');

```
