<?php
require_once "../vendor/autoload.php";

use phpreboot\util\IntegerArray as A;

$array = new A([5,3,-8,4]);

echo $array->sort()->toString() . PHP_EOL;
echo $array->sort(\phpreboot\util\IntegerArray::ORDER_DESCENDING)->toString() . PHP_EOL;
echo "Sum is " . $array->sum() . PHP_EOL;
echo "Product is " . $array->product() . PHP_EOL;
echo "Absolute: " . $array->absolute()->toString() . PHP_EOL;