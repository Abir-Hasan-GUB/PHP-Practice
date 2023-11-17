<?php
$numbers = array(1,2,3,4);

function sum($oldValue, $newValue){
    return $oldValue + $newValue;
}

$sum = array_reduce($numbers, 'sum', 0);
echo $sum; 