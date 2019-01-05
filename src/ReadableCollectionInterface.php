<?php

namespace Bitty\Collection;

interface ReadableCollectionInterface
{
    /**
     * Checks if a key exists in the collection.
     *
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * Gets the value for a key if it exists in the collection.
     *
     * Retruns the default value if not found.
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * Returns the entire collection.
     *
     * @return iterable
     */
    public function all(): iterable;
}
