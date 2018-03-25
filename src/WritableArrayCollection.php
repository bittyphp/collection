<?php

namespace Bitty\Collection;

class WritableArrayCollection extends ReadableArrayCollection implements WritableCollectionInterface
{
    /**
     * {@inheritDoc}
     */
    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }
}
