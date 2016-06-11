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

trait SortableTrait
{
    public function sort($order = AbstractArray::ORDER_ASCENDING)
    {
        if ($order === AbstractArray::ORDER_DESCENDING) {
            rsort($this->array, SORT_NUMERIC);
        } else {
            sort($this->array, SORT_NUMERIC);
        }

        return $this;
    }
}