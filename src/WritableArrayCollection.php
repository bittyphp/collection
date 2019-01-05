<?php

namespace Bitty\Collection;

use Bitty\Collection\ReadableArrayCollection;
use Bitty\Collection\WritableCollectionInterface;

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
