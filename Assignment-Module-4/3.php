<?php

$testArray = array(
    "One", "Two", "Three", "Four",
);

function removeFirstAndLastEl($testArrayInput)
{
    $testArray = $testArrayInput; // stored input array
    $afterRemoveFirstEl = array_shift($testArray); // remove first element
    $afterRemoveLastEl = array_pop($testArray); // remove last element

    return $testArray; // return new array without first and last elements
}

$output = removeFirstAndLastEl($testArray);
print_r($output);

// OUT-PUT:
/*
Array
(
[0] => Two
[1] => Three
)
 */
