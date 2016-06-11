<?php
/*
 * This file is part of the phpreboot/util package.
 *
 * Copyright (c) 2016 PHP Reboot, Kapil Sharma <kapil@kapilsharma.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpreboot\util;

use phpreboot\util\arrays\AbstractNumericArray;

/**
 * Class IntegerArray
 *
 * Utility array for integer array.
 *
 * @package phpreboot\util
 */
class IntegerArray extends AbstractNumericArray {
    protected function isValid()
    {
        return array_filter($this->array, 'is_int') === $this->array;
    }
}