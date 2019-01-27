<?php

namespace Bitty\Collection;

use Bitty\Collection\ReadableCollectionInterface;

class ReadableArrayCollection implements ReadableCollectionInterface
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * {@inheritDoc}
     */
    public function has(string $key): bool
    {
        return array_key_exists($key, $this->data);
    }

    /**
     * {@inheritDoc}
     */
    public function get(string $key, $default = null)
    {
        if (!array_key_exists($key, $this->data)) {
            return $default;
        }

        return $this->data[$key];
    }

    /**
     * {@inheritDoc}
     */
    public function all(): iterable
    {
        return $this->data;
    }
}
