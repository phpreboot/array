<?php
/*
 * This file is part of the phpreboot/util package.
 *
 * Copyright (c) 2016 PHP Reboot, Kapil Sharma <kapil@kapilsharma.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpreboot\util\arrays;

use phpreboot\util\arrays\SortableTrait;

abstract class AbstractArray {
    use SortableTrait;

    const ORDER_ASCENDING = 1;
    const ORDER_DESCENDING = 0;

    protected $array;

    public function __construct(array $array)
    {
        $this->array = $array;

        if (!$this->isValid()) {
            throw new \InvalidArgumentException("Array elements must be Integer");
        }
    }

    public function toString($separator = ",")
    {
        return implode($separator, $this->array);
    }

    abstract protected function isValid();
}