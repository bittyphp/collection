<?php

namespace Bitty\Collection;

interface WritableCollectionInterface extends ReadableCollectionInterface
{
    /**
     * Sets the value for a key in the collection.
     *
     * @param string $key
     * @param mixed $value
     */
    public function set(string $key, $value): void;
}
