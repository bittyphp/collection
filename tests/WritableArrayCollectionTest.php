<?php

namespace Bitty\Tests\Collection;

use Bitty\Collection\ReadableArrayCollection;
use Bitty\Collection\ReadableCollectionInterface;
use Bitty\Collection\WritableArrayCollection;
use Bitty\Collection\WritableCollectionInterface;
use PHPUnit\Framework\TestCase;

class WritableArrayCollectionTest extends TestCase
{
    public function testInstanceOf(): void
    {
        $fixture = new WritableArrayCollection();

        self::assertInstanceOf(ReadableArrayCollection::class, $fixture);
        self::assertInstanceOf(WritableCollectionInterface::class, $fixture);
    }

    public function testSet(): void
    {
        $key   = uniqid('key');
        $value = [uniqid()];

        $fixture = new WritableArrayCollection();

        $fixture->set($key, $value);
        $actual = $fixture->get($key);

        self::assertEquals($value, $actual);
    }
}
