<?php
$number = [1, 2, 3, 4, 5];

function square($n){
    return $n * $n;
}

$squaredNumbers = array_map('square', $number);
print_r ($squaredNumbers);