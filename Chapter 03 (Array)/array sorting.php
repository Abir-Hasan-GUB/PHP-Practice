<?php
$numbers = array(1,2,8,6,9,5,7,4,3);
sort($numbers); // sort arrays without reserved index
print_r($numbers);

$number2 = array(1,2,8,6,9,5,7,4,3);
asort($number2); // sort array with reserved indexes
print_r($number2);

rsort($number2); // sort array reversed
print_r($number2);

arsort($number2); // sort array with reserved and reserved indexes
print_r($number2);

$thirdNumber = array(
    7 => 'Seven',
    6 => 'Six',
    5 => 'Five',
    4 => 'Four',
    2 => 'Two',
    1 => 'One',
    3 => 'Three'
);
ksort($thirdNumber); // sort array by Keys
print_r($thirdNumber);