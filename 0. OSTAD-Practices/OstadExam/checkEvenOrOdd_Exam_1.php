<?php

$startingNumber = 1;
$endingNumber = 100;

$sum = 0;

for ($i = $startingNumber; $i <= $endingNumber; $i++) {
    $sum = $sum + $i;
}

echo "Summation of the series: 1+2+3...…….100 => " . $sum;
