<?php

namespace Bitty\Collection;

use Bitty\Collection\RemovableCollectionInterface;
use Bitty\Collection\WritableArrayCollection;

class RemovableArrayCollection extends WritableArrayCollection implements RemovableCollectionInterface
{
    /**
     * {@inheritDoc}
     */
    public function remove(string $key): void
    {
        if (array_key_exists($key, $this->data)) {
            unset($this->data[$key]);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function clear(): void
    {
        $this->data = [];
    }
}
