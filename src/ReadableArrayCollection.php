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
    public function has($key)
    {
        return isset($this->data[$key]);
    }

    /**
     * {@inheritDoc}
     */
    public function get($key, $default = null)
    {
        if (!isset($this->data[$key])) {
            return $default;
        }

        return $this->data[$key];
    }

    /**
     * {@inheritDoc}
     */
    public function all()
    {
        return $this->data;
    }
}
