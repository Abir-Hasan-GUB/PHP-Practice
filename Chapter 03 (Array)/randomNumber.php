<?php
$randomNumber = mt_rand(1, 10);
// echo $randomNumber;

$newArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16);
print_r (shuffle($newArray));

$randNumber = array(
    'a' => "A",
    'b' => "B",
    'c' => "C",
    'd' => "D"
);

echo PHP_EOL;

$randomKey = array_rand($randNumber);
echo "{$randomKey} => {$randNumber[$randomKey]}";
