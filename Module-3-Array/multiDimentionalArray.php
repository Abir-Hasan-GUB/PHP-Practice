<?php

$multiDimensions = array(
    'One' => [1, 2, 3, 4, 5],
    'two' => ['one', 'two', 'three' => [7, 8, 9 ]],
    3,
    4,
    'f' => 'five'
);

print_r($multiDimensions);

// print first elements array
print_r ($multiDimensions['One']);

// print third elements 2rd position element
echo "\n Second element of seconds element of third inner element: {$multiDimensions['two']['three'][1]}";