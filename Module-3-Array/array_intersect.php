<?php
$number1 = array( 1,10,8,6,90,50,7,04,3 );
$number2 = array( 1,2,8,6,9,5,7,4,3 );

print_r(array_intersect($number1, $number2)); // returns all matching elements

$numberArray1 = array(
    'c' => 'Three',
    'a' => 'One',
    'b' => 'Two',
    'e' => 'Five',
    'd' => 'Four',
);

$numberArray2 = array(
    'c' => 'Three',
    'a' => 'One',
    'bb' => 'Two',
    'ee' => 'Five',
    'd' => 'Four',
);

print_r(array_intersect_assoc($numberArray1, $numberArray2)); // returns all matching elements by check key values
