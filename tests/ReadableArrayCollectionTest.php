<?php

namespace Bitty\Tests\Collection;

use Bitty\Collection\ReadableArrayCollection;
use Bitty\Collection\ReadableCollectionInterface;
use PHPUnit\Framework\TestCase;

class ReadableArrayCollectionTest extends TestCase
{
    public function testInstanceOf(): void
    {
        $fixture = new ReadableArrayCollection();

        self::assertInstanceOf(ReadableCollectionInterface::class, $fixture);
    }

    /**
     * @param array $data
     * @param string $key
     * @param bool $expected
     *
     * @dataProvider sampleHasData
     */
    public function testHas(array $data, string $key, bool $expected): void
    {
        $fixture = new ReadableArrayCollection($data);

        $actual = $fixture->has($key);

        self::assertEquals($expected, $actual);
    }

    public function sampleHasData(): array
    {
        return [
            'has key' => [
                'data' => ['foo' => 'bar'],
                'key' => 'foo',
                'expected' => true,
            ],
            'does not have key' => [
                'data' => ['foo' => 'bar'],
                'key' => uniqid(),
                'expected' => false,
            ],
        ];
    }

    /**
     * @param array $data
     * @param string $key
     * @param mixed $default
     * @param mixed $expected
     *
     * @dataProvider sampleGetData
     */
    public function testGet(array $data, string $key, $default, $expected): void
    {
        $fixture = new ReadableArrayCollection($data);

        $actual = $fixture->get($key, $default);

        self::assertEquals($expected, $actual);
    }

    public function sampleGetData(): array
    {
        $default = uniqid('default');

        return [
            'has key' => [
                'data' => ['foo' => 'bar'],
                'key' => 'foo',
                'default' => $default,
                'expected' => 'bar',
            ],
            'data is null' => [
                'data' => ['foo' => null],
                'key' => 'foo',
                'default' => $default,
                'expected' => null,
            ],
            'no data; default string' => [
                'data' => ['foo' => 'bar'],
                'key' => uniqid(),
                'default' => $default,
                'expected' => $default,
            ],
            'no data; default null' => [
                'data' => ['foo' => 'bar'],
                'key' => uniqid(),
                'default' => null,
                'expected' => null,
            ],
            'no data; default array' => [
                'data' => ['foo' => 'bar'],
                'key' => uniqid(),
                'default' => [],
                'expected' => [],
            ],
        ];
    }

    public function testAll(): void
    {
        $data = [uniqid(), uniqid()];

        $fixture = new ReadableArrayCollection($data);

        $actual = $fixture->all();

        self::assertEquals($data, $actual);
    }
}
