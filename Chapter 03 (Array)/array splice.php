<?php
$number = [1, 2, 3, 4, 5];
$sliceOne = array_splice($number, 0,3, 'New Number'); // separate elements with add value
$sliceTwo = array_splice($number, -1, 1, 'Last Item');

print_r($sliceOne); 
print_r($number);

print_r($sliceTwo);

// merge two slices

print_r(array_merge($sliceOne, $sliceTwo));

print_r ($number); 