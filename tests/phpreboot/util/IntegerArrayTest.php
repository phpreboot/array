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

use phpreboot\util\IntegerArray;

class IntegerArrayTest extends \PHPUnit_Framework_TestCase
{
    private $array;

    public function setup()
    {
    }

    public function tearDown()
    {
        $this->array = null;
    }

    public function testIntegerArrayCanBeCreated()
    {
        $array = new IntegerArray([3, 5, 2]);
        $this->assertInstanceOf('phpreboot\util\IntegerArray',
            $array,
            "IntegerArray could not be created");
    }

    /**
     * @expectedException \InvalidArgumentException
     * @dataProvider invalidArrayProvider
     */
    public function testArrayCanNotHaveNonIntegers($array)
    {
        $array = new IntegerArray($array);
    }

    public function invalidArrayProvider()
    {
        return [
            [[2, 3.4]],
            [[5, true]],
            [[12, 'phpreboot']],
            [[15, '16']],
            [[7, null]],
        ];
    }
}