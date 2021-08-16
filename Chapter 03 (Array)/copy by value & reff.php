<?php

$newArray = [1, 2, 3, 4, 5];
$copyArray = $newArray;

print_r($newArray);

array_pop($copyArray); // remove an element from the array but not affect main array
print_r($copyArray);

// copy by reference
$copyByReffArray = &$newArray; // copy first element's address into the array
print_r($copyByReffArray);
array_pop($copyByReffArray);
print_r($copyByReffArray);

print_r($newArray); // affected by copy by reference