<?php
require_once "../vendor/autoload.php";

use phpreboot\util\IntegerArray as A;

$array = new A([5,3,-8,4]);

echo $array->sort()->toString() . PHP_EOL;                      // -8, 3, 4, 5
echo $array->sort(A::ORDER_DESCENDING)->toString() . PHP_EOL;   // 5,4,3,-8
echo "Sum is " . $array->sum() . PHP_EOL;                       //Sum is 4
echo "Product is " . $array->product() . PHP_EOL;               // Product is -480
echo "Absolute: " . $array->absolute()->toString() . PHP_EOL;   // 5,4,3,8