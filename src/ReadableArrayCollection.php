<?php

namespace Bitty\Collection;

class ReadableArrayCollection implements ReadableCollectionInterface
{
    /**
     * @var array
     */
    protected $data = null;

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
        return isset($this->data[$key]);
    }

    /**
     * {@inheritDoc}
     */
    public function get(string $key, $default = null)
    {
        if (!isset($this->data[$key])) {
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
