<?php

$newArray = [
    'One',
    'Two',
    'Three',
    'Four'
];

echo "Arrays Length: ".count($newArray) ."\n";
print_r($newArray) . "\n";

// add new elements on last of array
array_push($newArray, 'Five');
print_r($newArray) . "\n";
echo "New arrays Length: ".count($newArray). "\n";

// add new elements on top to array
array_unshift($newArray, 'Zero');
print_r($newArray) . "\n";
echo "New arrays Length: ".count($newArray). "\n";

// remove an element from bottom the array
array_pop($newArray);
print_r($newArray) . "\n";
echo "New arrays Length: ".count($newArray). "\n";

// remove an element from top of the array
array_shift($newArray);
print_r($newArray) . "\n";
echo "New arrays Length: ".count($newArray). "\n";