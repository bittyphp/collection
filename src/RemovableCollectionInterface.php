<?php

namespace Bitty\Collection;

use Bitty\Collection\WritableCollectionInterface;

interface RemovableCollectionInterface extends WritableCollectionInterface
{
    /**
     * Removes a given key from the collection.
     *
     * @param string $key
     */
    public function remove(string $key): void;

    /**
     * Clears all the data from the collection.
     */
    public function clear(): void;
}
