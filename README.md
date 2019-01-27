# Bitty Collection

[![Build Status](https://travis-ci.org/bittyphp/collection.svg?branch=master)](https://travis-ci.org/bittyphp/collection)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/4af9a543ef534b0986e8c30a23b7ebd5)](https://www.codacy.com/app/bittyphp/collection)
[![PHPStan Enabled](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat)](https://github.com/phpstan/phpstan)
[![Total Downloads](https://poser.pugx.org/bittyphp/collection/downloads)](https://packagist.org/packages/bittyphp/collection)
[![License](https://poser.pugx.org/bittyphp/collection/license)](https://packagist.org/packages/bittyphp/collection)

Simple object collections.

## Installation

It's best to install using [Composer](https://getcomposer.org/).

```sh
$ composer require bittyphp/collection
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

## Removable Collections

Removable collections MUST implement `Bitty\Collection\RemovableCollectionInterface`. The interface extends `Bitty\Collection\WritableCollectionInterface` and adds an additional `remove()` and `clear()`.

### Basic Usage

```php
<?php

use Bitty\Collection\RemovableArrayCollection;

$collection = new RemovableArrayCollection(
    [
        'foo' => 'bar',
        'baz' => ['blar', 'blah', 'blam'],
    ]
);

// Remove one item.
$collection->remove('foo');

// Clear all the data.
$collection->clear();

```
