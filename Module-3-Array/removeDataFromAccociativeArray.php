<?php

$number = array(
    'a' => 'One',
    'b' => 'Two',
    'c' => 'Three',
    'd' => 'Four'
);

unset($number['d']); // remove an element from the array

print_r($number);