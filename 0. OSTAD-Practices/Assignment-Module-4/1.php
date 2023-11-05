<?php

$array = [
    "Cat", "Banana", "Apple",
];

function mySort($a, $b)
{
    return strlen($b) - strlen($a);
}

usort($array, 'mySort');
print_r(array_reverse($array));

// OUT-PUT:
/*
Array
(
[0] => Cat
[1] => Apple
[2] => Banana
)
 */
