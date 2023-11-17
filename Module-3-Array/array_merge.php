<?php

$array1 = array(1, 2, 3, 4, 5);
$array2 = array(1 => 10, 2 => 20, 3 => 30, 4 => 40);
$array3 = array('one' => 1, 'two' => 2, 'three' => 3);

$newArray1 = array_splice($array1, 0, 2, true);
$newArray2 = array_splice($array2, 2, 2, true);
$newArray3 = array_splice($array3, 1, 2, true);

print_r($newArray1);
print_r($newArray2);
print_r($newArray3);

$newSumArray = array_merge($newArray1, $newArray2, $newArray3);

print_r($newSumArray);