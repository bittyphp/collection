<?php

namespace Bitty\Tests\Collection;

use Bitty\Collection\RemovableArrayCollection;
use Bitty\Collection\RemovableCollectionInterface;
use Bitty\Collection\WritableArrayCollection;
use Bitty\Collection\WritableCollectionInterface;
use PHPUnit\Framework\TestCase;

class RemovableArrayCollectionTest extends TestCase
{
    /**
     * @var RemovableArrayCollection
     */
    protected $fixture = null;

    protected function setUp(): void
    {
        parent::setUp();

        $this->fixture = new RemovableArrayCollection();
    }

    public function testInstanceOf(): void
    {
        self::assertInstanceOf(WritableArrayCollection::class, $this->fixture);
        self::assertInstanceOf(RemovableCollectionInterface::class, $this->fixture);
    }

    public function testRemove(): void
    {
        $key = uniqid('key');

        $this->fixture->set($key, uniqid());
        $this->fixture->remove($key);

        $actual = $this->fixture->has($key);

        self::assertFalse($actual);
    }

    public function testClear(): void
    {
        $this->fixture->set(uniqid(), uniqid());
        $this->fixture->set(uniqid(), uniqid());
        $this->fixture->clear();

        $actual = $this->fixture->all();

        self::assertEquals([], $actual);
    }
}
