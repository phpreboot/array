<?php
/*
 * This file is part of the phpreboot/util package.
 *
 * (c) Kapil Sharma <kapil@phpreboot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpreboot\util;

/**
 * Class IntegerArray
 *
 * Utility array for integer array.
 *
 * @package phpreboot\util
 */
class IntegerArray {

    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;

        if (!$this->isValidArray()) {
            throw new \InvalidArgumentException("Array elements must be Integer");
        }
    }

    public function isValidArray()
    {
        return array_filter($this->array, 'is_int') === $this->array;
    }
}