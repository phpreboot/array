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

use phpreboot\util\arrays\AbstractArray;

abstract class AbstractNumericArray extends AbstractArray
{
    public function sum()
    {
        return array_sum($this->array);
    }

    public function product()
    {
        return array_product($this->array);
    }

    public function absolute()
    {
        $array = array_map('abs', $this->array);
        $this->array = $array;

        return $this;
    }
}