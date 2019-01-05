<?php

namespace Bitty\Collection;

class WritableArrayCollection extends ReadableArrayCollection implements WritableCollectionInterface
{
    /**
     * {@inheritDoc}
     */
    public function set(string $key, $value): void
    {
        $this->data[$key] = $value;
    }
}
