<?php
// string to array convert
$arrayString = "Hello, world!";
$newArray = explode(' ', $arrayString);
echo $newArray[0];

$sentenceArray = ['I', 'am', 'Abir'];

// join all array elements together
$joinedArray = join(' ', $sentenceArray);
echo "\n". $joinedArray;

echo PHP_EOL;

// accociative array convert to string
$newArray = array(
    'a' => 'One',
    'b' => 'Two',
    'c' => 'Three',
    'd' => 'Four',
    'e' => 'Five'
);
$jsonFormatData = json_encode($newArray);
echo $jsonFormatData . "\n";

$retriveDataFromJson = json_decode($jsonFormatData, true);
print_r ($retriveDataFromJson);

echo PHP_EOL;

// sirialize data from array
$sirializeData = serialize($newArray);
echo $sirializeData;

$retriveSirializeData = unserialize($sirializeData);
print_r ($retriveSirializeData);